<x-app-layout>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="favicon.png">

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


        <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ asset('profil/profil.jpeg') }}');">
            <div class="container">
                <div class="row same-height justify-content-center">
                    <div class="">
                        <div class="post-entry text-center">
                            <h1 class="mb-4">Profil Desa | Galeri Desa</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="container">

                <div class="row blog-entries element-animate">

                    <div class="col-md-12 col-lg-12 main-content">
                        <div class="post-content-body">
                            <div class="row">
                                @foreach ($galeris as $galeri)
                                <div class="col-md-4 mb-4">
                                    <img src="{{ asset($galeri->image) }}" class="img-fluid rounded" style="width: 100%;">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- END main-content -->

                  
                </div>
        </section>




        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>


        <script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets2/js/tiny-slider.js') }}"></script>

        <script src="{{ asset('assets2/js/flatpickr.min.js') }}"></script>


        <script src="{{ asset('assets2/js/aos.js') }}"></script>
        <script src="{{ asset('assets2/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets2/js/navbar.js') }}"></script>
        <script src="{{ asset('assets2/js/counter.js') }}"></script>
        <script src="{{ asset('assets2/js/custom.js') }}"></script>



    </body>

    </html>
</x-app-layout>
