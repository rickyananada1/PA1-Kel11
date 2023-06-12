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
        <link rel="stylesheet" href="{{ asset('assets2/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('assets2/css/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/flatpickr.min.css') }}">

    </head>
    <title>
        Parawisata
    </title>

    <body>

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>





        <div class="site-cover site-cover-sm  overlay single-page"
            style="background-image: url('{{ asset('image/about/1766604814724897.jpeg') }}');">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="">
                        <div class="post-entry text-center">
                            <h1 class="mb-4">Pariwisata</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section search-result-wrap">
            <div class="container">

                <div class="row posts-entry rounded">
                    <div class="col-lg-8">

                        @foreach ($destinasis as $destinasi)
                            <div class="blog-entry d-flex blog-entry-search-item">
                                <a href="single.html" class="img-link me-4">
                                    <img src="{{ $destinasi->image }}" alt="Image" class="img-fluid "
                                        style="width: 400px; height: 200px;">
                                </a>
                                <div>
                                    <span class="date">{{ $destinasi->created_at }}</span>
                                    <h2><a href="{{ $destinasi->href }}" class="text-dark">{{ $destinasi->title }}</a>
                                    </h2>
                                    <p><a href="{{ $destinasi->href }}" class="btn btn-sm btn-light text-white"
                                            style="background-color:#032A3B; ">Read More</a></p>
                                </div>
                            </div>
                    </div>
                    <hr style="height: 3px">
                    @endforeach



                </div>
            </div>
        </div>
        </div>

        @include('partials._footer')
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
