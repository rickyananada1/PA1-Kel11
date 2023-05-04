
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

                    <h4>Home Struktur / Visi & Misi</h4>
                    <br>
                    <a href="{{route('add.about')}}" class="btn btn-info">Add Struktur / Visi & Misi</a>
                    <br><br>
                    <div class="card">

                  

                        <div class="card-header">All truktur / Visi & Misi</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="5%">image</th>
                 
                                    <th scope="col" width="15%">visi</th>
                                    <th scope="col" width="15%">misi</th>
                                    <th scope="col" width="15%">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                  
                                <tr>
                                    <th scope="row">  </th>
                                    <td>  </td>
                                    <td> </td>
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
