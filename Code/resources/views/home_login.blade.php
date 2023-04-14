@extends('layouts.app')

@section('content')
<div style="background-color: #eaeaea; padding-top: 5vh; height: 100vh" >

<section id="hero" class="d-flex align-items-center " style="padding-top: 15vh;" >

  <div class="container">
      <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1> <b> Hello (User), Welcome To LumbanBinanga.com </b></h1>
              <h2>I Hope You Enjoy This Experience And, <br> Thank You</h2>
              <div class="d-flex justify-content-center justify-content-lg-start">
              </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img w" >
              <img src="{{asset('OrangOranganWelcome.png')}}" class="img-fluid animated" alt="">
          </div>
      </div>
  </div>

</section>
</div>
@endsection
