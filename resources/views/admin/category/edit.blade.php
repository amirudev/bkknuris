@extends('layouts.master')
@section('title', 'Kategori')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Edit Kategori</h4>
                <p class="text-muted mb-3 font-14">Edit kategori "{{ $category->name_category }}"</p>

                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                <form class="w-100" method="POST" action="/admin/job/category/update">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}" type="text" placeholder="Nama Kategori" id="name" name="name" value="{{ $category->name_category }}">
                            @if($errors->has('name'))
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('name') }}</li></ul>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control {{ $errors->has('description') ? 'parsley-error' : '' }}" placeholder="Keterangan Kategori">{{ $category->keterangan }}</textarea>
                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('description') }}</li></ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning">Perbarui Kategori</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection