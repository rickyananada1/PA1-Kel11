@extends('admin.admin_master')
@section('admin')
    

        
        <div class="py-12">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Edit Contact</div>
                            <div class="card-body">

                                <form action="{{ url('contact/update/'.$contact->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="old_image" value="" >
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Contact Address </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="address"
                                    value="{{$contact->address}}">

                                    @error('address')
                                    {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                
                                    {{-- Descriptions  --}}
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Contact Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" 
                                    value="{{$contact->email}}">

                                    @error('email')
                                    {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Phone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="phone" 
                                    value="{{$contact->phone}}">

                                    @error('phone')
                                    {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>

                                    

                                    <button type="submit" class="btn bg-primary text-white">Update Contact</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection