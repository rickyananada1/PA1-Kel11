@extends('admin.admin_master');

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.team')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama </label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Input Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Role Team</label>
                    <input type="text" name="role" class="form-control" id="exampleFormControlInput1" placeholder="Input Role">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Team Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-footer  pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection