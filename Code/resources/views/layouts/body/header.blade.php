
      {{-- Headeer Display--}}
      {{-- Jika User Sudah Login --}}
      @if (Route::has('login'))
      @auth
      {{-- Tampilkan ini pada header --}}
       {{-- <a href="{{ url('frontend/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}

       @include('users.index')


     {{-- Jika Tidak --}}
     @else
     {{-- Tampilkan ini pada header --}}
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top d-flex align-items-center">
         <div class="container d-flex justify-content-between">

         <div class="logo">
             <h1><a href="index.html"><span>lumbanbinanga</span>.com</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar">
             <ul>
             <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
             <li><a class="nav-link scrollto" href="#about">About</a></li>
             <li><a class="nav-link scrollto" href="#services">Features</a></li>
             <li><a class="nav-link scrollto" href="#team">Destination</a></li>
             <li>
                 <a href="{{ route('login') }}" ">Log in</a>
             </li>
             @if (Route::has('register'))
             <li>
                 <a href="{{ route('register') }}" ">Register</a>
                 
             </li>
             @endif
             @endauth

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>

         </nav>
         <!-- .navbar -->
         </div>
         @endif

     </header>
     <!-- End Header -->