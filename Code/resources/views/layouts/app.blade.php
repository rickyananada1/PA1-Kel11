<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
 *{
  scroll-behavior: smooth;
}

</style>
<body>
    <div id="app">
        <nav class=" fixed-top navbar navbar-expand-md  shadow-sm"style="background-color:#D9D9D9;" >
            <div class="container">
                <a class="navbar-brand bg-mutte" href="{{ url('/') }}">
                 <h4> <b>LumbanBinanga.com</b></h4>
                  </a>
                  
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto text-white ">
                        <!-- Authentication Links -->
                        @guest

                         <li class="nav-item px-2">
                            <b><a class="nav-link text-dark" href="#id">Description</a></b>
                         </li>

                         <li class="nav-item px-2">
                            <b><a class="nav-link text-dark" href="#">Destination</a></b>
                         </li>



                         
                        {{-- Jika Login Tampilkan ini --}}
                            @if (Route::has('login'))
                                <li class="nav-item px-2">
                                   <b> <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a></b>
                                </li>
                            @endif

                        {{-- Jika Register Tampilkan ini --}}
                            @if (Route::has('register'))
                                <li class="nav-item px-2 ">
                               <b>     <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a></b>
                                </li>
                            @endif
                    


                        {{-- Jika sudah masuk tampilkan ini --}}
                        @else
                        <li class="nav-item dropdown text-dark px-2">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <b>
                                Feature
                            </b>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Pengelolaan Sampah</a>
                                <a class="dropdown-item" href="#">Diskusi</a>
                                <a class="dropdown-item" href="#">Kontak Kami</a>
                                <a class="dropdown-item" href="#">Destinasi Wisata</a>
                            </div>
                            
               
                        </li>

                        <li class="nav-item px-2">
                            <b><a class="nav-link text-dark" href="">Profil Desa</a></b>
                             </li>  


                        <li class="nav-item">
                            <b>     <a class="nav-link text-dark" href=""></a></b>
                             </li>
                            <li class="nav-item dropdown text-dark">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <b> {{ Auth::user()->name }}</b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="">Settings</a>

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

        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
