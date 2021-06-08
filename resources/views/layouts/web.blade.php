<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<header class="shadow-lg">
    <div class="bg-white py-1">
        <nav class="py-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="h-10 mx-auto">
            </a>
        </nav>
    </div>

</header>
<main class="py-10">
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
</main>
<footer class="py-4 text-center">
    @auth
        <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
    @else
        <a href="{{ url('login') }}" class="text-sm text-gray-700 underline mr-3">Login</a>
        <a href="{{ url('register') }}" class="text-sm text-gray-700 underline">Register</a>
    @endif
</footer>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
