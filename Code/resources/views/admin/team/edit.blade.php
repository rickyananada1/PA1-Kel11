@extends('admin.admin_master')



@section('admin')
    
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Slider</div>
                        <div class="card-body">
                            {{-- Action itu adalah apa yang akan dilakukan saat button di click --}}
                            {{-- Perlu menambahkan fungsi enctype dimana kita akan merupah gambar --}}
                            <form action="{{ url('team/update/'.$teams->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- Input type karena untuk proses update kita butuh old_image atau data yang lama --}}
                                <input type="hidden" name="old_image" value="{{$teams->image}}" >


                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Team Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="name"
                                  value="{{ $teams->name }}">

                                  @error('name')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                               
                                {{-- Descriptions  --}}
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Role Team</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="role" 
                                  value="{{ $teams->role }}">

                                  @error('role')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                               
                                {{-- Image --}}
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Team Image</label>
                                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" 
                                  value="{{ $teams->image }}">

                                  @error('image')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>

                                {{-- Menampilkan Gambarnya --}}
                                <div class="form-group">
                                    <img src="{{asset($teams->image)}}" style="width: 400px; height: 300px">
                                </div>

                                <button type="submit" class="btn bg-primary text-white">Update Sliders</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
