<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Fummedicare')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body class="text-dark">
        <div class="">
            @include('inc.navbar')
        </div>
        <main id="front" class="bg-gray">
            @yield('content')
           
        </main>
        <div class="">
            @include('inc.footer')
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
