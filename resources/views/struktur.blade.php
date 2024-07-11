@extends('layout.pages')
@section('title', 'Struktur Organisasi')
@section('content')

<div class="-mt-5 py-10">
    <img src="{{ asset('image/logo/logoKabinet.jpg') }}" class="absolute inset-0  h-60 mt-32 pl-20 " />

    <div class="relative ">
      <div class="px-4 sm:px-10">
        <div class="mt-16 max-w-4xl ml-56 text-center relative z-10">
          <h2 class="md:text-5xl text-4xl font-semibold mb-6 md:!leading-[75px]">Struktur Organisasi</h2>
          <h1 class="md:text-6xl text-4xl font-bold mb-6 md:!leading-[75px]">Kabinet Aviskara Adhigana</h1>
        </div>
        <hr class="my-12 border-gray-900" />
      </div>
    </div>
    
    <div class="w-40 h-auto relative block bg-gray-100 p-3 rounded-xl text-center font-[sans-serif] mx-auto mt-4">
        <img src="https://readymadeui.com/team-6.webp" class="w-full rounded-xl" />
        <h4 class="text-sm text-gray-800 mt-4 font-bold">Emma Berger</h4>
    </div>
    
    <div class="w-40 h-auto relative block bg-gray-100 p-3 rounded-xl text-center font-[sans-serif] mx-auto mt-4">
        <img src="https://readymadeui.com/team-6.webp" class="w-full rounded-xl" />
        <h4 class="text-sm text-gray-800 mt-4 font-bold">Emma Berger</h4>
    </div>
    
    <div class="w-40 h-auto relative block bg-gray-100 p-3 rounded-xl text-center font-[sans-serif] mx-auto mt-4">
        <img src="https://readymadeui.com/team-6.webp" class="w-full rounded-xl" />
        <h4 class="text-sm text-gray-800 mt-4 font-bold">Emma Berger</h4>
    </div>

</div>
    @endsection
