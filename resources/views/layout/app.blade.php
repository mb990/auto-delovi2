<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page title') - {{ config('app.name', 'Ауто-дијелови') }}</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{ asset ('css/Footer-Basic.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/Header-Blue.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/Highlight-Blue.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/Map-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/Navigation-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/styles.css') }}">
</head>

<body>
    @include('inc.navbar')
    <div class="highlight-blue">
        <div class="container" style="min-height:400px;">
            @if(Request::is('proizvodi'))
                <div class="intro" style="padding-top:48px;">
                    <h2 class="text-center">@yield('heading')</h2>
                </div>
                   
                    @yield('content')
            @else
                <div class="intro" style="padding-top:48px;">
                    <h2 class="text-center">@yield('heading')</h2>
                    @yield('content')
                </div>
            @endif
        </div>
    </div>
    @include('inc.footer')
    <div class="map-clean"></div>
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>



