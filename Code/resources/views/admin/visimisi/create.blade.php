@extends('admin.admin_master');

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Visi & Misi</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.visimisi')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Visi</label>
                    <textarea class="form-control" name="short_des" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Misi</label>
                    <textarea class="form-control" name="long_des" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                
                <div class="form-footer  pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default"> Add Visi Misi </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection