<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Kastrat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardKastratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kastrats.index', [
            'title' => 'Kastrat',
            'kastrats' => Kastrat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/kastrats/create', [
            'title' => 'Create Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:kastrats',
            'image' => 'required|image|file|max:5120',
            'body' => 'required'
        ]);
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('kastrat-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        
        Kastrat::create($validatedData);
    

        return redirect('/dashboard/kastrats')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kastrat $kastrat)
    {
        return view('dashboard.kastrats.show', [
            'title' => $kastrat->title,
            'kastrat' => $kastrat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kastrat $kastrat)
    {
        return view('dashboard/kastrats/edit', [
            'title' => $kastrat->title,
            'kastrat' => $kastrat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kastrat $kastrat)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ];

        if ($request->slug != $kastrat->slug) {
            $rules['slug'] = 'required|unique:kastrats';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('kastrat-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Kastrat::where('id', $kastrat->id)
            ->update($validatedData);

        return redirect('/dashboard/kastrats')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kastrat $kastrat)
    {
        if ($kastrat->image) {
            Storage::delete($kastrat->image);
        }
        Kastrat::destroy($kastrat->id);
        return redirect('/dashboard/kastrats')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kastrat::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
