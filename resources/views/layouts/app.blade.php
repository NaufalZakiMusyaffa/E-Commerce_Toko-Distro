<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="64x64" href="./icons/crown.png">
    <title>FKZ Distro</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="
    sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- <img src="{{ url('logo/Logo Distro.png') }}" width="150" alt=""> -->
                            <a href="https://www.facebook.com/nouval.zaki.9"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-line text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                     
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><strong class="text-white">{{ __('Login') }}</strong></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><strong class="text-white">{{ __('Register') }}</strong></a>
                                </li>
                            @endif
                        @else
                             <li class="nav-item">
                                <?php
                                $jumlah_pesanan = \App\Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
                                if(!empty($jumlah_pesanan)) {
                                $notifikasipesanan = \App\DetailPesanan::where('id_pesanan', $jumlah_pesanan->id)->count();
                                }
                                ?>
                                
                                <a class="nav-link" href="{{ url('check-out') }}"><i class="fa fa-shopping-cart text-white">  Keranjang Belanja</i>
                                @if(!empty($notifikasipesanan))
                                <span class="badge badge-danger">{{ $notifikasipesanan }}</span>
                                @endif
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ url('history') }}">History Pesanan</a>
                                    <a class="dropdown-item" href="{{ url('buktitransfer') }}">Bukti Transfer</a>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
