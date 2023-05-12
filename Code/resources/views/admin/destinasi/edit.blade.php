@extends('admin.admin_master')



@section('admin')
    
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Destinasi</div>
                        <div class="card-body">

                            {{-- Action itu adalah apa yang akan dilakukan saat button di click --}}
                            {{-- Perlu menambahkan fungsi enctype dimana kita akan merupah gambar --}}
                            <form action="{{ url('destinasi/update/'.$destinasis->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- Input type karena untuk proses update kita butuh old_image atau data yang lama --}}
                                <input type="hidden" name="old_image" value="{{$destinasis->image}}" >


                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Destinasi Title</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="title"
                                  value="{{ $destinasis->title }}">

                                  @error('title')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                               
                                {{-- Descriptions  --}}
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Destinasi Short Descriptions</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="short_des" 
                                  value="{{ $destinasis->short_des }}">

                                  @error('short_des')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Destinasi Long Descriptions</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="long_des" 
                                  value="{{ $destinasis->long_des }}">

                                  @error('long_des')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                               
                                {{-- Image --}}
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Edit Destinasi Images</label>
                                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" 
                                  value="{{ $destinasis->image }}">

                                  @error('image')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>

                                {{-- Menampilkan Gambarnya --}}
                                <div class="form-group">
                                    <img src="{{asset($destinasis->image)}}" style="width: 400px; height: 300px">
                                </div>

                                <button type="submit" class="btn bg-primary text-white">Update Destinasi</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
