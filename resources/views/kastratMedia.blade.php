@extends('layout.pages')
@section('title', 'Kastrat Media')
@section('content')
<div class="bg-slate-400 pb-6">

    <div class="relative bg-gradient-to-r from-purple-900 to-indigo-800 py-16 font-[sans-serif]">
        <div class="absolute inset-0">
            <img src="{{asset('image/fotbar.png')}}" alt="Background Image"
            class="w-full h-full object-cover opacity-50" />
        </div>
        <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Welcome to Our Premium Service</h1>
            <p class="text-lg md:text-xl mb-8">Experience excellence like never before with our exclusive products and
                services.</p>
            </div>
    </div>

    <div
    class="bg-white grid sm:grid-cols-2 items-start shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-4/5  max-sm:max-w-sm rounded-lg font-[sans-serif] overflow-hidden ml-6 mt-6 hover:scale-[1.02] transition-all ">
        <div class="min-h-[280px] h-full">
            <img src="{{asset('image/fotbar.png')}}" class="w-full h-full object-cover" />
        </div>

        <div class="px-6 py-4 h-full">
            <h3 class="text-xl font-semibold ">Judul Kajian</h3>
            <p class="mt-3 text-sm text-gray-500 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
            </p>
            <div class="flex  bg-white flex-wrap h-10 border border-gray-300 rounded-lg w-32 px-4 py-2 mt-6">
                <a href="{{ asset('files/sample.pdf') }}" class="text-sm text-gray-600  hover:text-purple-700"
                    target="_blank">Selengkapnya</a>
            </div>
        </div>
    </div>


</div>
@endsection
