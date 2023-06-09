<title>lumbanbinanga.com</title>

<x-app-layout>


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Untree.co">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap5" />


        <link rel="stylesheet" href="{{ asset('assets2/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('assets2/css/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/flatpickr.min.css') }}">

        <link rel="icon" href="assets5/beach.png">
            


    </head>

    <body>
        <section style="" >
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close">
                        <span class="icofont-close js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>


            <div class="site-cover site-cover-sm  overlay single-page"
                style="background-image: url('{{ asset('profil/profil.jpeg') }}');">
                <div class="container">
                    <div class="row  justify-content-center">
                        <div class="">
                            <div class="post-entry text-center ">
                                <h1 class="mb-4">Profil Desa | Sejarah Desa</h1>

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

                                @foreach ($sejarahs as $sejarah)
                                   
                                    



                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                <h1 class="text-dark">
                                                    Sejarah Desa
                                                </h1>
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <p class="fs-5 text-dark">
                                                    {{ $sejarah->sejarah_desa }}
                                                </p>  
                                            </div>
                                          </div>
                                        </div>
                                      
                                      </div>




                            </div>
                            @endforeach



                        </div>


                        
                        <!-- END main-content -->


                    </div>


            </section>
        </section>

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
