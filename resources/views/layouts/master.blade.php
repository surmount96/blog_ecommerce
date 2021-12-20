<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Aworanti Funmilayo">
        <meta name="keywords" content="Funmilayo, Medical, Medicare, Online Doctor, Virtual health care,Fummedicare">
        <meta name="description" content="Fummedicare is a virtual health center">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Fummedicare')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/logo/favicon.jpeg') }}" type="image/x-icon">
    </head>
    <body class="text-dark">
        
        <main id="front" class="">
            <div class="">
                @include('inc.navbar')
            </div>
            @yield('content')
            <div class="">
                @include('inc.footer')
            </div>
        </main>
        
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
