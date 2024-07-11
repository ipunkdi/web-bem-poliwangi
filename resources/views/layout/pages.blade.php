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
    <header class='flex border-b py-4 px-4 sm:px-10 bg-white font-sans min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center gap-4 w-full'>
            <a href="javascript:void(0)"><img src="{{ asset('image/logo/poliwangiBem.png') }}" alt="logo"
                    class='w-14' />
            </a>
            <p class="font-bold">Badan Eksekutif Mahasiswa</p>

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

                    {{-- <ul class='lg:flex lg:gap-x-8 max-lg:space-y-2'>
                        <li class='mb-6 hidden max-lg:block'>
                            <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg"
                                    alt="logo" class='w-36' />
                            </a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3'>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[#007bff] block font-bold text-[15px]'>Home</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>Shop</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>Sale</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>Manage</a>
                        </li>
                    </ul> --}}

                    <ul class='lg:flex lg:items-center  max-lg:block lg:space-x-8 ml-auto'>
                        <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>Home</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>Struktural</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3 max-lg:mt-2 block'><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 block font-bold text-[15px]'>Tupoksi</a>
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
                                                    <a href="" tabindex="0"
                                                        class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                                        role="menuitem">DAGRI</a>
                                                    <a href="" tabindex="1"
                                                        class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                                        role="menuitem">LUGRI</a>
                                                    <a href="" tabindex="2"
                                                        class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                                        role="menuitem">MEDINFO</a>
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
                <button
                    class='px-4 py-2.5 text-sm rounded font-bold text-white border-2 border-[#1d294f] bg-[#1d294f] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#1d294f]'>
                    Lapor Kesma</button>

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
    <main class="mx-auto scroll-smooth overflow-hidden">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-12 px-4 font-sans tracking-wide">
        <div class="text-center">
            <h6 class="text-base">Stay connected with us:</h6>

            <ul class="flex flex-wrap justify-center gap-x-8 gap-4 my-8">
                <li><a href="javascript:void(0)" class="text-xl hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-7 h-7" viewBox="0 0 512 512">
                            <path fill="#1877f2"
                                d="M512 256c0 127.78-93.62 233.69-216 252.89V330h59.65L367 256h-71v-48.02c0-20.25 9.92-39.98 41.72-39.98H370v-63s-29.3-5-57.31-5c-58.47 0-96.69 35.44-96.69 99.6V256h-65v74h65v178.89C93.62 489.69 0 383.78 0 256 0 114.62 114.62 0 256 0s256 114.62 256 256z"
                                data-original="#1877f2" />
                            <path fill="#fff"
                                d="M355.65 330 367 256h-71v-48.021c0-20.245 9.918-39.979 41.719-39.979H370v-63s-29.296-5-57.305-5C254.219 100 216 135.44 216 199.6V256h-65v74h65v178.889c13.034 2.045 26.392 3.111 40 3.111s26.966-1.066 40-3.111V330z"
                                data-original="#ffffff" />
                        </svg>
                    </a></li>

                <li><a href="https://www.instagram.com/bempoliwangi/" class="text-xl hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-7 h-7" viewBox="0 0 24 24">
                            <linearGradient id="a" x1="-37.106" x2="-26.555" y1="-72.705"
                                y2="-84.047" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fd5" />
                                <stop offset=".5" stop-color="#ff543e" />
                                <stop offset="1" stop-color="#c837ab" />
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M1.5 1.633C-.386 3.592 0 5.673 0 11.995c0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091C18.89.029 18.778.005 15.91 0 5.737.005 3.507-.448 1.5 1.633z"
                                data-original="url(#a)" />
                            <path fill="#fff"
                                d="M11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471a1.063 1.063 0 1 0 0 2.126 1.063 1.063 0 0 0 0-2.126zm-4.73 1.243a4.55 4.55 0 1 0 .001 9.101 4.55 4.55 0 0 0-.001-9.101zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z"
                                data-original="#ffffff" />
                        </svg></a></li>

                <li><a href="javascript:void(0)" class="text-xl hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-7 h-7" viewBox="0 0 1227 1227">
                            <path
                                d="M613.5 0C274.685 0 0 274.685 0 613.5S274.685 1227 613.5 1227 1227 952.315 1227 613.5 952.315 0 613.5 0z"
                                data-original="#000000" />
                            <path fill="#fff"
                                d="m680.617 557.98 262.632-305.288h-62.235L652.97 517.77 470.833 252.692H260.759l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074L680.601 557.98zM345.423 299.545h95.595l440.024 629.411h-95.595z"
                                data-original="#ffffff" />
                        </svg></a></li>
            </ul>

            <p class="text-base">&copy; 2023 Badan Eksekutif Mahasiswa POLIWANGI</p>

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
