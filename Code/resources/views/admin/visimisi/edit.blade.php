@extends('admin.admin_master')



@section('admin')
    
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Visi & Misi</div>
                        <div class="card-body">

                            <form action="{{ url('visimisi/update/'.$visimisis->id) }}" method="POST" >
                                @csrf

          
                                
                                <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Visi</label>
                                        <textarea class="form-control" name="short_des" id="exampleFormControlTextarea1" rows="3">{{ $visimisis->visi }}</textarea>

                                  @error('short_des')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                
                                <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Misi</label>
                                        <textarea class="form-control" name="long_des" id="exampleFormControlTextarea1" rows="3">{{ $visimisis->misi }}</textarea>

                                  @error('long_des')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>

                                <button type="submit" class="btn bg-primary text-white">Update Visi & Misi</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @endsection
