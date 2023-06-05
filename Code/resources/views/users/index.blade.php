


<x-app-layout>
   
    
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{asset('app.css')}}">


 <section id="hero" class="d-flex align-items-center" style="width: 100%; height: 89vh"> 
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center">
            <div class=" text-center ">
              <h1> Hi <b>{{Auth::user()->name}}</b> Welcome To lumbanbinanga.com <br></h1>
              <h2> <b> Thank You For Fisiting Our website </b></h2>
            </div>
          </div>

          <div class="text-center">
            <a href="/contact" class="btn-get-started scrollto text-decoration-none"><b>Kontak Kami</b> </a>
            <h2> <b> Don't hesitate to contact us if you have problems </b></h2>
          </div>
    

          
          </div>
        </div>
      </section>


   {{-- <section style="width: 80vh; height: 80vh">
    </section>  --}}

<script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}" defer></script>
    


    </x-app-layout>


