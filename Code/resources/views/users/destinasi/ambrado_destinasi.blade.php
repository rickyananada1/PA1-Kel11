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
        Pantai Lumban Binanga
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
        <div class="site-cover site-cover-sm same-height overlay single-page"
            style="background-image: url('{{ asset('assets2/images/hero_8.jpeg') }}');">
            <div class="container">
                <div class="row same-height justify-content-center">
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

                    <div class="col-md-12 col-lg-12 main-content text-dark">
                        <div class="post-content-body">
                            <p class="fs-5">
                                Ambarado Cafe, Resto & Hotel, yang terletak di Lumban Binanga, Kecamatan Laguboti, Sumatera Utara, adalah sebuah destinasi yang menawarkan pengalaman yang menyenangkan bagi para pengunjungnya. Dengan kombinasi unik antara kafe, restoran, dan hotel, Ambarado menyediakan berbagai fasilitas untuk mengakomodasi kebutuhan dan keinginan pengunjungnya.
                            </p>

                            <p class="fs-5">
                                Ketika Anda melangkah masuk ke dalam Ambarado Cafe, Resto & Hotel, Anda akan langsung diperhatikan oleh desain interior yang menawan. Suasana yang hangat dan nyaman diciptakan dengan kombinasi elemen-elemen modern dan nuansa tradisional. Dekorasi yang menarik dengan sentuhan lokal menciptakan atmosfer yang memikat dan memberikan pengalaman yang unik bagi para tamu.
                            </p>

                            <p class="fs-5">
                                Kafe ini menawarkan beragam pilihan minuman yang lezat dan berkualitas. Anda dapat menikmati secangkir kopi segar yang disajikan dengan indah, berbagai jenis teh aromatik, atau minuman khas yang dihidangkan dengan penuh keahlian. Menu makanan ringan juga beragam, mulai dari roti dan kue yang lezat hingga hidangan penutup yang menggugah selera. Para pengunjung dapat menikmati santapan mereka sambil menikmati pemandangan sekitar atau berbincang dengan teman-teman di meja yang nyaman.
                            </p>


                            <div class="row">
                                <div class="col-md-12 mb-5 mt-5 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('image/destinasi/1768472693066728.jpeg') }}"
                                        alt="Image placeholder" class="img-fluid rounded pl-3 mx-auto"
                                        style="width: 500px;">
                                </div>
                            </div>


                            <p class="fs-5">
                                Restoran di Ambarado Cafe, Resto & Hotel menyajikan hidangan utama yang lezat dan beragam. Dengan fokus pada masakan lokal dan internasional, restoran ini menghadirkan hidangan lezat yang menggabungkan cita rasa tradisional dengan sentuhan modern. Para koki berbakat menggunakan bahan-bahan segar dan berkualitas tinggi untuk menciptakan hidangan yang menggugah selera. Suasana restoran yang tenang dan elegan membuat makanan di Ambarado menjadi pengalaman yang tak terlupakan.
                            </p>
                            <p class="fs-5">
                                Selain sebagai kafe dan restoran, Ambarado juga menawarkan fasilitas penginapan di hotelnya. Dengan kamar yang luas, nyaman, dan dilengkapi dengan fasilitas modern, pengunjung dapat menikmati masa menginap yang menyenangkan di tempat ini. Staf yang ramah dan profesional siap membantu dalam memenuhi kebutuhan dan kenyamanan para tamu.
                            </p>
                            <p class="fs-5">
                                Secara keseluruhan, Ambarado Cafe, Resto & Hotel adalah destinasi yang layak dikunjungi di Lumban Binanga, Kecamatan Laguboti, Sumatera Utara. Dengan suasana yang menawan, hidangan lezat, dan pelayanan yang ramah, Ambarado memberikan pengalaman yang memuaskan bagi pengunjungnya. Apakah Anda mencari tempat untuk bersantai, menikmati hidangan lezat, atau menginap semalam, Ambarado dapat menjadi pilihan yang sempurna.
                            </p>

                        </div>




                    </div>



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
