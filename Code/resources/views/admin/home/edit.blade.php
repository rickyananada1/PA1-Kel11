@extends('admin.admin_master')
@section('admin')
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit About</div>
                        <div class="card-body">

                            <form action="{{ url('about/update/' . $abouts->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{ $abouts->image }}">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email" name="title"
                                        value="{{ $abouts->title }}">

                                    @error('title')
                                        {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Short Description</label>
                                    <textarea class="form-control" name="short_des" id="exampleFormControlTextarea1" rows="3">{{ $abouts->short_des }}</textarea>

                                    @error('short_des')
                                        {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Point Description</label>
                                    <textarea class="form-control" name="long_des" id="exampleFormControlTextarea1" rows="3">{{ $abouts->long_des }}</textarea>

                                    @error('long_des')
                                        {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Image --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit About Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email" name="image"
                                        value="{{ $abouts->image }}">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                {{-- Menampilkan Gambarnya --}}
                                <div class="form-group">
                                    <img src="{{ asset($abouts->image) }}" style="width: 400px; height: 300px">
                                </div>

                                <button type="submit" class="btn bg-primary text-white">Update About</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
