<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Vegan Restaurant") }}@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">


    <link rel="icon" href="/images/favicon.ico"> 
</head>
<body>    
    <div id="app" class="container">
        <div class="top-bar">
            <div>Call us at (374) 56-78-91</div>
            <div><a href="#">get driving directions</a></div>
        </div>            
        <header>
            <a href="/"><img src="/images/logo.png"></a>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(227, 249, 210);">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="/">Home</a></li>
                    <li class="nav-item"><a href="#">About</a></li>
                    <li class="nav-item"><a href="/menu">Menu</a></li>
                    <li class="nav-item"><a href="#">Reservations</a></li>
                    <li class="nav-item"><a href="#">Location &amp; Hours</a></li>
                    <li class="nav-item"><a href="#">Contact</a></li>

                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>                                                            
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>

                    @endguest
                </ul>
                </div>
            </nav>
        </header>  
        <main class="page-content">
            @auth
                <div style="text-align: center; margin-bottom: 20px; margin-top: -10px;">
                    <a href="/menu-editor/" style="color: #5ca522;">Manage Menu</a>
                    <a href="/clients/" style="color: #5ca522;">Manage Clients</a>
                </div>
            @endauth

            @yield('content')
        </main>    
        <footer>
            Powered by ©X-Tech
        </footer>   
    </div>                           
</body>

</html>
