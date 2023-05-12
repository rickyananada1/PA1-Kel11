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

                    <a href="{{route('add.destinasi')}}" class="btn btn-info">Add Destinasi</a>
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

                        <div class="card-header">All Destinasi</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="10%">Title</th>
                                    <th scope="col" width="15%">Short Descriptions</th>
                                    <th scope="col" width="25%">Long Descriptions</th>
                                    <th scope="col" width="15%">Image</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @php($i = 1)

                                {{-- $categories merupakan hasil passingan dari compact categoris yang ada di category controller --}}
                                @foreach ($destinasis as $destinasi)
                                <tr>
                                    {{-- {{ $categories->firstItem()+$loop->index }} Agar data berurutan --}}
                                    <th scope="row"> {{ $i++ }} </th>
                                    {{-- lalu didefinisikan menjadi $category->nama_field table categoriesnya  --}}
                                    <td> {{ $destinasi->title}} </td>
                                    <td> {{ $destinasi->short_des}} </td>
                                    <td> {{ $destinasi->long_des}} </td>
                                    
                                    {{-- Menggunakan Model --}}
                                  <td>  <img src="{{ asset($destinasi->image) }}" style="height: 40px; width: 70px">
                                  </td>

                                    <td>
                                        {{-- url digunakan untuk menspesikifikan data mana yang mau diupdate dari idnya sendiri --}}
                                        <a href="{{ url('destinasi/edit/'.$destinasi->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('destinasi/delete/'.$destinasi->id) }}" onclick="return confirm('Are You Sure U Want To Delete The Data')" 
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Pagination --}}
                        {{-- Variable $categories variable yang dipassing dari controller menggunakan compact --}}
                            {{-- {{ $brands->links() }} --}}
                    </div>
                </div>
               

            </div>
        </div>



    </div>

@endsection
