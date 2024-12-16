<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

       <!-- Scripts -->  <style> 
            .background {
                background-image: url("img/fineBack.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            .logo{
                width: 200px;
                height:200px;
            }
            </style>
    </head>
    <body class="font-sans antialiased text-gray-900">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0 background">
            <div class="logo">
                <a href="/">
                    <img src="img/logo.png">
                </a>
            </div>

            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg ">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
