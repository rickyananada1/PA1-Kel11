@extends('admin.admin_master');

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Sejarah Desa</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.sejarah')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sejarah Desa</label>
                    <textarea class="form-control" name="sejarah_desa" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
             
                <div class="form-footer  pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default"> Add Sejarah </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection