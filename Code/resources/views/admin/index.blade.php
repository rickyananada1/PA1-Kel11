


{{-- Extend dugunakan untuk memanggil admin_master --}}
@extends('admin.admin_master')


{{-- halaman ini akan dibuat menjadi section dengan nama admin --}}
@section('admin')
<div class="text-center justify-center aligncenter" style="padding-top: 17%">
    <h1 class="pb-3"> Hi <b>{{Auth::user()->name}}</b> Welcome To lumbanbinanga.com Admins Dashboard<br></h1>

<a href="/" class="btn btn-primary"> User View </a>


  </div>
 
          
@endsection
