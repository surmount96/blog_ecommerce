<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Doctor on call')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .wf-inter-n4-active{
                font-family: 'Mulish', sans-serif!important;
            }
        </style>
    </head>
    <body class="text-dark">
        <div id="front">
            @include('inc.navbar')
            <main>
                @yield('content')
            </main>
            @include('inc.footer')
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
