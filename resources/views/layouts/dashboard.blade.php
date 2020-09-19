<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard | Fummedicare') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/user.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="Admin">
        <main>
            <div class="flex flex-wrap relative">
                <div class="w-2/12 z-50 border-r border-gray fixed top-0 left-0 bg-white" style="height: 100vh;width:225px">
                    @include('dashboard.inc.aside')
                </div>
                <div class="lg:w-10/12 md:w-10/12 w-full absolute right-0 top-0">
                    <div class="">
                        @include('dashboard.inc.navbar')
                    </div>
                    <div class="p-5 bg-gray-200">
                        @yield('content')
                    </div>
                    <div class="">
                        @include('dashboard.inc.footer')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
