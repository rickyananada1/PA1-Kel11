<title>
    Kontak Kami
</title>
<x-app-layout>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('frontendz/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontendz/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontendz/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <style>

        .container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .info-wrap {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-wrap h4 {
            margin-top: 10px;
            font-size: 18px;
        }

        .info-wrap p {
            margin-bottom: 0;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;"
            src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7972.800416995309!2d99.11742595!3d2.37183905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0169f24d5643%3A0x674dc28c28d7ce48!2sLumban%20Binanga%2C%20Kec.%20Laguboti%2C%20Toba%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1684912560802!5m2!1sid!2sid"
            frameborder="0" allowfullscreen></iframe>

    </div>
    <section id="contact" class="contact">
        <div class="container bg-white p-5 rounded-full">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap rounded">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>{{ $contacts->address }}</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $contacts->email }}</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>{{ $contacts->phone }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="{{ route('contact.form') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    @include('partials._footer')
    <!-- End Contact Section -->
</x-app-layout>
