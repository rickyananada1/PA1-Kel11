{{-- Berisikan keseluruhan tentang destinasi nanti jika di klik masuk ke halaman blog nya  --}}
<x-app-layout>
    <!doctype html>
    <html lang="en">
    <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('assets2/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets2/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/flatpickr.min.css')}}">
    
    </head>
    <body>
    
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
    
     
    
      <div class="hero overlay inner-page py-4" style="background-color:#032A3B">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ">
            <div class="col-lg-6">
              <h1 class="heading text-white pt-2" data-aos="fade-up">Destinasi Wisata & News</h1>
            </div>
          </div>
        </div>
      </div>
    
      <div class="section search-result-wrap">
        <div class="container">
          
          <div class="row posts-entry">
            <div class="col-lg-8">
    
              @foreach ($destinasis as $destinasi)  
              <div class="blog-entry d-flex blog-entry-search-item">
                <a href="single.html" class="img-link me-4">
                  <img src="{{$destinasi->image}}" alt="Image" class="img-fluid " style="width: 400px; height: 200px;">
                </a>
                <div>
                  <span class="date">{{$destinasi->created_at}}</span>
                  <h2><a href="single.html">{{$destinasi->title}}</a></h2>
                  <p><a href="{{$destinasi->href}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                </div>
              </div>
            </div>
            <hr style="height: 3px">
            @endforeach
    
       
    
            </div>
          </div>
        </div>
      </div>
        <script src="{{asset('assets2/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets2/js/tiny-slider.js')}}"></script>
    
        <script src="{{asset('assets2/js/flatpickr.min.js')}}"></script>
    
    
        <script src="{{asset('assets2/js/aos.js')}}"></script>
        <script src="{{asset('assets2/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets2/js/navbar.js')}}"></script>
        <script src="{{asset('assets2/js/counter.js')}}"></script>
        <script src="{{asset('assets2/js/custom.js')}}"></script>
    
        
      </body>
      </html>
</x-app-layout>
