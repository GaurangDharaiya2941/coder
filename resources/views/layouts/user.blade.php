<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name', 'Laravel') }} | Welcome</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        @yield('css')
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="@auth {{ route('home') }} @else {{ url('/') }} @endauth">{{ config('app.name', 'Laravel') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @auth
                        <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">HOME</a></li>
                        @if(auth()->user()->role != 'user')
                        <li class="nav-item"><a class="nav-link" href="{{ (auth()->user()->role == 'Super Admin') ? route('superadmin.dashboard') : route('admin.dashboard') }}">DASHBOARD</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">BLOG</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">GROUP</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">EVENT</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">POST</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">PAGE</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HELP</a></li>
                        @else
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i> LOGIN</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link"><i class="fas fa-users"></i> REGISTER</a>
                                @endif
                            </li>
                            @endif
                        @endauth
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT</a></li>
                        @auth
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content-->
        @yield('content')

        <!-- Footer-->
        <footer class="py-4 bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <ul>
                            <li><a href="{{ route('terms.condition') }}" class="text-white">Terms and Conditions</a></li>
                            <li><a href="{{ route('declaimer') }}" class="text-white">Declaimer</a></li>
                            <li><a href="{{ route('terms.use') }}" class="text-white">Terms of use</a></li>
                            <li><a href="{{ route('help') }}" class="text-white">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul>
                            <li><a href="{{ route('privacy.policy') }}" class="text-white">Privacy Policy</a></li>
                            <li><a href="{{ route('contact') }}" class="text-white">Contact us</a></li>
                            <li><a href="{{ route('about') }}" class="text-white">About us</a></li>
                        </ul>
                    </div>
                </div>
                <p class="m-0 text-center text-white">Copyright  BlogSolver&copy; 2021</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
    @yield('scripts')
</html>
