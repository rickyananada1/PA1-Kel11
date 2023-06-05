@extends('admin.admin_master');

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Berita</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.destinasi')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Input Title">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Descriptions</label>
                    <textarea type="text" name="short_des" class="form-control" id="exampleFormControlInput1" placeholder="Input Short Descriptions"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Long Descriptions</label>
                    <textarea type="text" name="long_des" class="form-control" id="exampleFormControlFile1" placeholder="Input Long Descriptions"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Href</label>
                    <input type="text" name="href" class="form-control" id="exampleFormControlFile1">
                </div>
                <div class="form-footer  pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
