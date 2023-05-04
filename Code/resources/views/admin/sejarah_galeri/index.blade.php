
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

                    <h4>Home Sejarah & Galeri</h4>
                    <br>
                    <a href="{{route('add.about')}}" class="btn btn-info">Add Sejarah / Galeri</a>
                    <br><br>
                    <div class="card">

                  

                        <div class="card-header">All Sejaran & About</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="10%">Sejarah Desa</th>
                                    <th scope="col" width="15%">Galeri</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                  
                                <tr>
                                    <th scope="row">  </th>
                                    <td>  </td>
                                    <td> </td>
                                    <td>  
                                        <a href="#" class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
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
