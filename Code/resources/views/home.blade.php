@extends('layouts.master_home')

@section('home_content')
    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">



        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>About</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-left">
                        <div class="single-well"    >
                            <a href="#">

                                {{-- Image --}}
                                <img src="{{ asset($abouts->image) }}" class="img-fluid">


                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <a href="#">

                                {{-- Title --}}
                                <h4> <b> {{ $abouts->title }} </b></h4>
                            </a>
                            {{-- Short Description --}}
                            <p>
                                {{ $abouts->short_des }}
                            </p>
                            <ul>

                                {{-- Long Description --}}
                                <li>
                                    <p class=" fw-bold" style="font-size: 16px">{{ $abouts->long_des }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End col-->
            </div>
        </div>


    </div><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <div id="services" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline services-head text-center">
                        <h2>Our Features</h2>
                    </div>
                </div>
            </div>


            <div class="row text-center">
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="bi bi-briefcase"></i>
                                </a>
                                {{-- Title Atribute --}}
                                <h4>Profil Desa</h4>
                                {{-- Description Atributte --}}
                                <p>
                                    Berisi tentang Sejarah, Visi & Misi, Struktur Pemerintahan, Dan Galeri Desa
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="bi bi-card-checklist"></i>
                                </a>
                                <h4>Pengelolaan Sampah</h4>
                                <p>
                                    Berisi tentang bagaimana desa ini melakukan pengelolaan sampah, dan edukasi terkait
                                    dengan pengelolaan sampah
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="bi bi-bar-chart"></i>
                                </a>
                                <h4>Forum Diskusi</h4>
                                <p>
                                    Berisi tentang obrolan antar user maupun admin, yang didalamnya membahas tentang desa
                                    lumbanbinanga itu sendiri maupun website lumbanbinanga.com
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="bi bi-binoculars"></i>
                                </a>
                                <h4>Destinasi Wisata </h4>
                                <p>
                                    Berisi tentnag destinasi destinasi wisata yang ada di dalam Desa Lumban Binanga
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->


                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="bi bi-brightness-high"></i>
                                </a>
                                <h4>Berita</h4>
                                <p>
                                    Berisi tentnag berita-berita terkait yang berkaitan dengan Desa Lumban Binanga itu
                                    sendiri
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="bi bi-calendar4-week"></i>
                                </a>
                                <h4>Penerima Kendala</h4>
                                <p>
                                    Berisi tentnag kendala, kritik dan saran dari user sehingga Developer tau apa yang salah
                                    dari websitenya
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Feature Section -->

    <!-- ======= Destination Section ======= -->
    <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Our Destintation</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="{{ asset($team->image) }}" class="team-img-popup">
                                    <img src="{{ asset($team->image) }}" class="img-fluid"
                                        style="width: 100%; height: 360px;">
                                </a>

                            </div>

                            <div class="team-content text-center">
                                <h4>{{ $team->name }}</h4>
                                <p>{{ $team->role }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                @endforeach
            </div>

        </div>
    </div>
    <!-- End Destination Section -->

    {{-- PANTAI LUMBAN BINANGA (Description) --}}
    <!-- ======= Rviews Section ======= -->
    <div style="background-color: #000000">
        <div class="row g-0">
            <div class="col-lg-6"> <br><br> <br>
                <img src="frontend/assets/pantai.jpeg" width="950px" style="height: 600px; padding-bottom: 70px">
            </div>
            <div class="col-lg-6 work-right-text d-flex align-items-center">
                <div class="px-5 py-5 py-lg-0">
                    <h1>Deskripsi Singkat </h1>
                    <h2>Pantai Lumban Binanga</h2>
                    <h6 class="text-white ">Salah satu ciri khas dari desa lumban binaga, dimana memiliki pemandangan yang
                        sangat indah, sehingga anda bisa meilihat pemandangan danau toba dan perbukitan yang sangat terbuka
                    </h6>
                    <a href="#contact" class="ready-btn scrollto">More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Rviews Section -->


@endsection


