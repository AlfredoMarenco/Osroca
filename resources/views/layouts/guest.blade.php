<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap text-center bg-pink-500 p-4">
        <div class="block lg:hidden">
            <button id='boton'
                class="flex items-center px-3 py-2 border rounded text-white border-pink-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div id='menu' class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Docs
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Examples
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
                    Blog
                </a>
            </div>
            <div>
                <a href="#"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-pink-500 hover:bg-white mt-4 lg:mt-0">Download</a>
            </div>
        </div>
    </nav>
    <div class="font-sans text-gray-900 antialiased">
        @yield('section')
    </div>
    <script src="js/nav.js"></script>
</body>

</html>
