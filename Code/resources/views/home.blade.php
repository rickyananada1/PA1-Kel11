
@extends('layouts.app')

@section('content')



<div style="background-color: #EAEAEA; height: 80vh;" class="pb-5" >

  {{-- First Page --}}
    <div class="container pb-5" style="padding-top: 25px;">
        <div class="row pt-5">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1 class="fw-bolder">Halo, dan Selamat Datang</h1>
            <p class="fw-normal">Lumban Binanga adalah salah satu desa di Kecamatan <br> Laguboti Kabupaten Toba, Provinsi Sumatera Utara, Indonesia</p>
        <div>
            <button type="button" class="btn btn-dark fw-bolder " ><a href="#id" class="text-white text-decoration-none">Jelajahi Lebih Dalam -></a></button>
        </div>
        
        
        </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img pt-5" >
            <img src="{{asset('Laptop.png')}}" class="img-fluid animated  ">
          </div>
        </div>

      </div>
</div>

{{-- Seccond Page --}}

<div style="background-color: #EAEAEA; height: 100vh;" id="id" class="pt-4" >
  <div class="container pt-5">
    <h1 class="text-center pb-5"><b>Desa Lumban Binanga</b></h1>
    <div class="fw-normal">
    <p>Lumban Binanga adalah sebuah desa yang terletak di kecamatan Balige, Kabupaten Toba, Sumatera Utara, Indonesia. Desa ini memiliki keindahan alam yang sangat menarik, dengan latar belakang pegunungan dan danau Toba yang membentang luas. Selain itu, desa ini juga dikenal sebagai pusat kerajinan tradisional Batak, terutama dalam pembuatan ulos dan songket.
        Desa Lumban Binanga memiliki sejarah yang kaya, terutama dalam bidang kebudayaan. Salah satu tempat yang menjadi ikon desa ini adalah Rumah Bolon, yaitu sebuah bangunan tradisional Batak yang digunakan sebagai pusat kegiatan adat. Rumah Bolon tersebut memiliki arsitektur yang khas dengan atap berbentuk tanduk kerbau yang melambangkan kemakmuran dan kejayaan. <br><br>
        
        Selain itu, desa Lumban Binanga juga memiliki wisata alam yang sangat menarik, seperti air terjun Sigura-gura yang terletak tidak jauh dari desa ini. Air terjun ini memiliki ketinggian sekitar 250 meter dan menjadi salah satu destinasi wisata favorit di Sumatera Utara.
        Di desa ini, wisatawan juga dapat melihat secara langsung proses pembuatan ulos dan songket yang merupakan kerajinan tradisional khas Batak. Selain itu, wisatawan juga dapat membeli produk-produk tersebut sebagai oleh-oleh khas dari desa Lumban Binanga. <br><br>
        
        Secara keseluruhan, desa Lumban Binanga adalah sebuah tempat yang sangat menarik untuk dikunjungi. Kombinasi antara keindahan alam, kebudayaan, dan kerajinan tradisional membuat desa ini menjadi destinasi wisata yang sangat menarik bagi wisatawan yang ingin menikmati keindahan dan kearifan lokal Sumatera Utara.</p>
      </div>
      </div>
    
</div>



{{-- Third Page --}}

<div style="background-color: #EAEAEA; height: 70vh;">

    
{{--     

    
  <div class="container pt-5">
    <div class="row pt-5">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 " data-aos="fade-up" data-aos-delay="200">
        <img src="{{asset('Iphone.png')}} " class="img-fluid animated pt-2" style="width:65%;"  >
    </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" style="padding-top: 20vh" >
        <h1><b>Pantai Lumban Binanga</b></h1>
        <p>Gambar disebelah merupakan salah satu dari keindahan Lumban Binanga yaitu Pantai Lumban Binanga, dimana cocok untuk dinikmati saat jenuh.</p>
        
        <div>
        <button type="button" class="btn btn-dark" ><a href="" class="text-white text-decoration-none">Destinasi Lainnya -></a></button>
        </div>
      </div>
    </div>

  </div> --}}


  
      
</div>






</div>






      



@endsection
