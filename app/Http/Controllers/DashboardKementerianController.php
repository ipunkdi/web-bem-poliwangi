<?php

namespace App\Http\Controllers;

use App\Models\Kementerian;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardKementerianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tupoksi(){
        $data = Kementerian::all();

        return view('tupoksi', compact('data'));
    }
    public function index()
    {
        return view('dashboard.kementerians.index', [
            'title' => 'Kastrat',
            'kementerians' => Kementerian::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/kementerians/create', [
            'title' => 'Create Kementerian'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|file|max:5120',
            'description' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('/kementerian-images');
        }
        // $validatedData['description'] = strip_tags($validatedData['description']);

        Kementerian::create($validatedData);

        return redirect('/dashboard/kementerians')->with('success', 'New kementerian has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kementerian $kementerian)
    {
        return view('dashboard.kementerians.show', [
            'title' => $kementerian->name,
            'kementerian' => $kementerian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kementerian $kementerian)
    {
        return view('dashboard/kementerians/edit', [
            'title' => $kementerian->name,
            'kementerian' => $kementerian
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kementerian $kementerian)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'description' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('kementerian-images');
        }

        Kementerian::where('id', $kementerian->id)
                    ->update($validatedData);

        return redirect('/dashboard/kementerians')->with('success', 'Kementerian has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kementerian $kementerian)
    {
        //
    }
}
