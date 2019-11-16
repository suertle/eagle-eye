<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                EagleEye
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                @else
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            ข้อมูล
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('product') }}">สินค้า</a>
                            <a class="dropdown-item" href="{{ route('rent_thing') }}">ของยืม</a>
                            <a class="dropdown-item" href="{{ route('member') }}">สมาชิก</a>
                            <a class="dropdown-item" href="{{ route('member_plan') }}">โปรแกรมสมาชิก</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('checkin') }}">เช็คอิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rent') }}">ยืมของ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cashier') }}">ขายของ</a>
                    </li>
                </ul>
                @endguest
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <canvas id="cropCanvas" class="d-none"></canvas>
    <main id="app" class="py-4">
        @yield('content')
        <alert ref="alert"/>
    </main>

    <!-- Scripts -->
    <script src="/js/moment.min.js" defer></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
