<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>myGram</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/2a4b093b57.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/svg/myGram.svg" style="height:25px; border-right: 1px solid #333;" class="pe-2">
                    </div>
                    <div class="ps-2">myGram</div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <div class="d-flex justify-content-center w-100">
                        @if (auth()->user())
                            <ul class="navbar-nav d-flex justify-content-around w-50">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        <i class="fa-solid fa-house-chimney fa-xl"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/search" class="nav-link">
                                        <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/explore" class="nav-link">
                                        <i class="fa-solid fa-compass fa-xl"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link disabled">
                                        <i class="fa-solid fa-bell fa-xl"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/p/create" class="nav-link">
                                        <i class="fa-solid fa-square-plus fa-xl"></i>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="/profile/{{ Auth::user()->id }}" class="nav-link">
                                        <img src="/storage/{{ Auth::user()->profile->image }}" alt=""
                                            width="25" class="rounded-circle">
                                    </a>
                                </li>
                            </ul>
                        @endif
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 my-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
