<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    {{-- Trix --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display:none;
        }
    </style>
    <title>Admin - {{ $title }}</title>
</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
    {{-- Header --}}
    @include('dashboard.layouts.header')

    {{-- Sidebar --}}
    @include('dashboard.layouts.sidebar')

    {{-- Main --}}
    <main class="p-4 md:ml-64 h-auto pt-20">
        @yield('container')
    </main>
    </div>
</body>
</html>