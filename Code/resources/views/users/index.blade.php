<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{asset('app.css')}}">

<x-app-layout>
 <x-slot name="header">
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center">
            <div class=" text-center">
              <h1> Hi <b>{{Auth::user()->name}}</b> Welcome To lumbanbinanga.com <br></h1>
              <h2> <b> Thank You For Fisiting Our website </b></h2>
            </div>
          </div>

          <div class="text-center">
            <a href="#" class="btn-get-started scrollto"> <p class="fs"><b> Contact Us</b> </p> </a>
            <h2> <b> Don't hesitate to contact us if you have problems </b></h2>
          </div>
    

          {{-- Card Section --}}
          <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="ri-stack-line"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="ri-palette-line"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="ri-command-line"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="ri-fingerprint-line"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
    
          </div>
        </div>
      </section>


    </x-slot> 
    

    
</x-app-layout>



<script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}" defer></script>
