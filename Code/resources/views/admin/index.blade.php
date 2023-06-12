


{{-- Extend dugunakan untuk memanggil admin_master --}}
@extends('admin.admin_master')


{{-- halaman ini akan dibuat menjadi section dengan nama admin --}}
@section('admin')
<link rel="icon" href="assets5/beach.png">

<div class="text-center justify-center aligncenter" style="padding-top: 17%">
    <h1 class="pb-3"> Hi <b>{{Auth::user()->name}}</b> Welcome To lumbanbinanga.com Admins Dashboard<br></h1>
  <a href="/forum" class="btn btn-primary">Users View</a>


  </div>
 
          
@endsection
