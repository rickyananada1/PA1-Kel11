{{-- 

maksudnya tampilkan di ke admin_master yang mempunyai di bagian yield('admin') karena section ini dinamai admin, 
maka tampilkan keseluruhan index ini ketika pengguna memilih home_brand yang ada di sidebar.blade.php 

--}}
@extends('admin.admin_master')

@section('admin')
    
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <a href="{{route('add.galeri')}}" class="btn btn-info">Add Galeri</a>
                    <br><br>
                    <div class="card">

                        @if (session('success'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                        @endif

                        <div class="card-header">All Galeri</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="60%">Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @php($i = 1)

                                @foreach ($galeris as $galeri)
                                <tr>
                                    {{-- Menggunakan Model --}}
                                  <td>  <img src="{{ asset($galeri->image) }}" width="300px"  height="300px" >
                                  </td>

                                    <td style="padding-top: 10%">
                                        {{-- url digunakan untuk menspesikifikan data mana yang mau diupdate dari idnya sendiri --}}
                                        <a href="{{ url('galeri/edit/'.$galeri->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('galeri/delete/'.$galeri->id) }}" onclick="return confirm('Are You Sure U Want To Delete The galeri')" 
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
               

            </div>
        </div>



    </div>

@endsection
