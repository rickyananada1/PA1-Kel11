@extends('admin.admin_master')



@section('admin')
    
    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Sejarah Desa</div>
                        <div class="card-body">

                            <form action="{{ url('sejarah/update/'.$Sejarahs->id) }}" method="POST" >
                                @csrf

          
                                
                                <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Sejarah Desa</label>
                                        <textarea class="form-control" name="sejarah_desa" id="exampleFormControlTextarea1" rows="3">{{ $Sejarahs->sejarah_desa }}</textarea>

                                  @error('short_des')
                                  {{-- {{$message}} dibawah merupakan bawaan dari blade --}}
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                
                                

                                <button type="submit" class="btn bg-primary text-white">Update Sejarah Desa</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @endsection
