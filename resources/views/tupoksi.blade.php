@extends('layout.pages')
@section('title', 'Tupoksi Kementerian')
@section('content')

    @foreach ( $data as $kementerian)
    <div class="flex items-center justify-center bg-slate-600 px-8 py-20 h-auto  ">
        <div class="w-56 h-56 mr-4 overflow-hidden">
            <img src="storage/{{ $kementerian->image }}" alt="Logo" class="w-full h-full">
        </div>
        <div class="w-1/2 ml-24">
            <h1 class="text-3xl font-bold -mt-2 mb-5 text-white">{{ $kementerian->name }}</h1>
            <article class="text-white">{!! $kementerian->description !!}</article>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <span class="block h-[3px] bg-white w-3/4 -mt-8 "></span>
    </div>
    @endforeach

    @endsection
