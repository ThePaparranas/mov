<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Filmes, Séries, Animes, Notícias sobre a 7º arte">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @if(auth()->check())
    <script src="{{ asset('js/app.js') }}" defer></script>
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
@if(auth()->check())
    <div id="app">
        <App :user='{{ auth()->user() }}'
             base-dir='{{ basename(base_path()) }}'
             app-name='{{ config('app.name') }}'/>
    </div>
@else
    <div>
        {{--TODO--}}
        Por favor, <a href="{{ route('login') }}">autentique-se</a>
    </div>
@endif
</body>
</html>
