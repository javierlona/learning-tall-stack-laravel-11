<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                {{-- Rendered by resources/views/livetwo.blade.php --}}
                @yield('some-content')
                {{-- Rendered by resources/views/foo.blade.php --}}
                @yield('content')
            </br>
                <h2>Heading Two</h2>

                @section('sidebar')
                    <p>This is the master sidebar.</p>
                @show
               
            </main>
        </div>
    </body>
</html>