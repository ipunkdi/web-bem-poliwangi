<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth focus:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('image/logo/poliwangiBem.png') }}" type="image/x-icon">

    <style>
        .dropdown:focus-within .dropdown-menu {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
        }
    </style>
</head>

<body>
    <header class='fixed flex right-0 left-0 border-b py-4 px-4 sm:px-10 bg-white font-sans min-h-[70px] tracking-wide z-50'>
        <div class='flex flex-wrap items-center gap-4 w-full'>
            <a href="javascript:void(0)" class="flex">
                <img src="{{ asset('image/logo/poliwangiBem.png') }}" alt="logo"
                    class='w-14' />
                    <span class="font-bold pt-2 pl-6 block">Badan Eksekutif Mahasiswa
                        <span class="block font-medium text-sm" >Politeknik Negeri Banyuwangi</span>
                    </span>
            </a>

            <div id="collapseMenu"
                class='lg:!flex lg:flex-auto lg:ml-12 max-lg:hidden max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <div
                    class="lg:!flex lg:flex-auto max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">

                    <ul class='lg:flex lg:items-center  max-lg:block lg:space-x-8 ml-auto'>
                        <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'>
                            <a href='{{route('landingpage')}}'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>HOME</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'>
                            <a href='{{route('kastrat')}}'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>KASTRAT MEDIA</a>
                        </li>
                        {{-- <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'><a href='{{route('struktur')}}'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>STRUKTUR</a>
                        </li> --}}
                        <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'><a href='{{route('tupoksi')}}'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>TUPOKSI</a>
                        </li>
                        <li>
                            <div class="-ms-12 bg-transparent flex flex-col justify-center">
                                <div class="flex items-center justify-center">
                                    <div class="relative inline-block text-left dropdown">
                                        <span class="rounded-md shadow-sm"><button
                                                class="inline-flex justify-center w-full py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-transparent  rounded-md  focus:outline-none focus:border-blue-300 focus:shadow-outline-blue "
                                                type="button" aria-haspopup="true" aria-expanded="true"
                                                aria-controls="headlessui-menu-items-117">
                                                <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button></span>
                                        <div
                                            class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                aria-labelledby="headlessui-menu-button-1"
                                                id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                @if (!empty($data[0]))
                                                @foreach ($data as $Data)
                                                    <a href="" tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem">
                                                        {{$Data->name}}
                                                    </a>
                                                @endforeach
                                                @else
                                                <p href="" tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem">
                                                    Tidak Ada Data
                                                </p>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class='flex items-center ml-10 space-x-6'>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTDuzEALGXoMWpHUgAwL0DOp3kDgPVoEF0rdEOOc75ffpEZQ/viewform?fbclid=PAY2xjawG-RHxleHRuA2FlbQIxMQABpqsKfHzaSgPuPFsv8xArs5xi2ZuOrwdMvIBgGgiRUrpzLX-5RQ2iJiV0sw_aem_CBpoH0-x1Fv8kydX5TYhcA"
                target="_blank" class='px-4 py-2.5 text-sm rounded font-bold text-white border-2 border-[#1d294f] bg-[#1d294f] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#1d294f]'>
                    LAPOR KESMA</a>

                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main class="pt-20 mx-auto scroll-smooth overflow-hidden z-10">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-12 px-4 font-sans tracking-wide">
        <div class="text-center">
            <h6 class="text-base">Stay connected with us:</h6>

            <ul class="flex flex-wrap justify-center gap-x-8 gap-4 my-8">
                <li><a href="javascript:void(0)" class="text-xl hover:text-gray-400">
                        <img src="{{ asset('image/logo/facebook.png') }}" class="w-8" alt="facebook"></a></li>
                    </a></li>

                <li><a href="https://www.instagram.com/bempoliwangi/" class="text-xl hover:text-gray-400">
                        <img src="{{ asset('image/logo/insta.png') }}" class="w-9" alt="instagram"></a></li>

                <li><a href="javascript:void(0)" class="text-xl hover:text-gray-400">
                        <img src="{{ asset('image/logo/tiktok.png') }}" class="w-9" alt="tiktok"></a></li>
                </a></li>
            </ul>

            <p class="text-base">&copy; 2024 Badan Eksekutif Mahasiswa POLIWANGI</p>

        </div>
    </footer>
    <script>
        var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);
    </script>
</body>

</html>
