<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>lumbanbinaga.com Admin Dashborad</title>

    <!-- GOOGLE FONTS -->
    <link rel="icon" href="assets5/beach.png">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css"') }} rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />

    <script src="{{ asset('/backend/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        @include('admin.body.sidebar')



        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">


                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <!-- Github Link Button -->
                            <li class="github-link mr-3">
                                <a class="btn btn-outline-secondary btn-sm"
                                    href="https://github.com/samuelalbi11/PA1-Kel11" target="_blank">
                                    <span class="d-none d-md-inline-block mr-2">Source Code</span>
                                    <i class="mdi mdi-github-circle"></i>
                                </a>

                            </li>


                            {{-- Tempat Admin Logout --}}

                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="d-none d-lg-inline-block"> <b>{{ Auth::user()->name }}</b> </span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <div class="d-inline-block">
                                            <b>{{ Auth::user()->name }}</b> <small
                                                class="pt-1">{{ Auth::user()->email }}</small>
                                        </div>
                                    </li>

                                    <li class="pb-3 cursor-pointer">
                                        <a>
                                            <form action="{{ route('logout.perform') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="text-secondary "><i
                                                        class="mdi mdi-logout pr-2 text-secondary"></i> Log Out</button>
                                            </form>
                                        </a>
                                    </li>

                                </ul>
                            </li>







                        </ul>
                    </div>
                </nav>


            </header>


            <div class="content-wrapper">
                <div class="content">
                    {{-- 
                    yield digunakan untuk menampilkan isi dari sebuah section
                    section itu yang mana halaman index yang akan dimasukan kedalam section
                    menggunakan directive section 
                    --}}
                    @yield('admin')
                </div>




            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year"></span> Copyright lumbanbinaga.com Admin Dashboard by
                        <a class="text-primary" href="https://github.com/samuelalbi11" target="_blank">Samuel Albi Pulo
                            Sibarani</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/date-range.js') }}"></script>
    <script src="{{ asset('backend/assets/js/map.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>




</body>

</html>
