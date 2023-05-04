
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

                    <h4>contactus</h4>
                    <br>
                    <a href="{{route('add.about')}}" class="btn btn-info">Add Contact</a>
                    <br><br>
                    <div class="card">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert"aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-header">All Contact Data</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="10%">Contact Address</th>
                                    <th scope="col" width="15%">Contact Email</th>
                                    <th scope="col" width="15%">Contact Phone</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach($contactuses as $con) 
                                <tr>
                                    <th scope="row">{{ $i++ }} </th>
                                    <td>{{ $con->adress}}</td>
                                    <td>{{ $con->email}}</td>
                                    <td>{{ $con->phone}}</td>
                                        <a href="{{ url('contactus/edit/' . $con->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('contactus/delete/' . $con->id) }}"
                                        onclick="return confirm('Anda yakin untuk menghapus data?')"
                                        class="btn btn-danger">Delete</a>
                                     </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
               

            </div>
        </div>



    </div>

@endsection
