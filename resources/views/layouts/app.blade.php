<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @include('partials.css.main')
    @include('partials.js.main')
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    @include('partials.nav.main')
    <div id="container" >
        <div id="content-wrap" >
            <div id="center" >
                <div id="center-in" >
                        @yield('content')
                </div> <!-- end #center-in -->
            </div> <!-- end #center -->
            
        </div> <!-- end #content-wrap -->
        
        <div id="footer-wrap" >
            <div id="footer-in" >
                <ul id="nav-footer" >
                   @yield('footer')
                </ul>
            </div>
        </div>
    </div> <!-- end #container -->

    @yield('footer.script')
    @yield('page.script')
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
