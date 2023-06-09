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
            style="background-image: url('{{ asset('assets2/images/hero_8.jpg') }}');">
            <div class="container">
                <div class="row same-height justify-content-c   enter">
                    <div class="">
                        <div class="post-entry text-center">
                            <h1 class="mb-4">Destinasi Wisata | Pantai Lumban Binanga</h1>

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
                            <p class="fs-5">Desa Lumban Binanga adalah sebuah desa yang terletak di kecamatan Toba Samosir, Sumatera Utara, Indonesia. Desa ini memiliki luas wilayah sekitar [x] kilometer persegi dan jumlah penduduk sekitar [y] jiwa. Desa Lumban Binanga terletak di dataran tinggi yang dikelilingi oleh pegunungan dan danau, memberikan pemandangan alam yang indah.</p>

                            <p class="fs-5">Desa Lumban Binanga memiliki sejarah yang kaya dan merupakan bagian dari wilayah kebudayaan Batak Toba. Masyarakat desa ini mayoritas bermata pencaharian sebagai petani, nelayan, dan pedagang. Mereka menggantungkan hidup dari hasil pertanian seperti padi, jagung, sayuran, serta hasil perikanan dari danau di sekitarnya.
                            </p>

                            <p class="fs-5">Selain kegiatan pertanian, Desa Lumban Binanga juga memiliki potensi pariwisata yang menarik. Keindahan alamnya, seperti pegunungan yang hijau dan Danau Toba yang luas, membuat desa ini menjadi tujuan wisata yang menarik bagi wisatawan lokal maupun mancanegara. Beberapa objek wisata yang terkenal di sekitar Desa Lumban Binanga antara lain [nama objek wisata], yang menawarkan keindahan alam dan kegiatan rekreasi yang menarik.</p>


                            <div class="row">
                                <div class="col-md-12 mb-5 mt-5 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('image/destinasi/1767326756838309.jpeg') }}" alt="Image placeholder"
                                        class="img-fluid rounded pl-3 mx-auto" style="width: 500px;">
                                </div>
                            </div>
                            
                            
                            <p class="fs-5">Masyarakat Desa Lumban Binanga sangat menjunjung tinggi adat dan budaya Batak Toba. Mereka memiliki berbagai tradisi dan acara adat yang dijalankan secara turun temurun, seperti upacara perkawinan adat, adat istiadat dalam menghormati orang tua, serta berbagai festival dan perayaan keagamaan yang menjadi bagian penting dari kehidupan masyarakat desa.

                            </p>
                            <p class="fs-5">Pemerintahan desa di Lumban Binanga berupaya untuk meningkatkan kualitas hidup masyarakat dengan mengembangkan infrastruktur, pendidikan, dan kesehatan. Terdapat juga program-program pembangunan ekonomi yang bertujuan untuk meningkatkan kesejahteraan masyarakat desa.</p>
                            <p class="fs-5">Dengan keindahan alam, kekayaan budaya, dan keramahan masyarakatnya, Desa Lumban Binanga merupakan tempat yang menarik untuk dikunjungi dan mengenal lebih jauh tentang kehidupan masyarakat Batak Toba.</p>
                            
                        </div>




                    </div>

                    <!-- END main-content -->

                  
                </div>
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
