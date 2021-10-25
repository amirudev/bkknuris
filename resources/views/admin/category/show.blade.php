@extends('layouts.master')
@section('title', 'Kategori')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-3">
            <div class="card-body">

                <h4 class="mt-0 header-title">Detail Kategori</h4>
                <p class="text-muted mb-3 font-14">Detail kategori untuk "{{ $category->name_category }}"</p>

                <div class="w-100">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}" type="text" placeholder="Nama Kategori" id="name" name="name" value="{{ $category->name_category }}" readonly>
                            @if($errors->has('name'))
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('name') }}</li></ul>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control {{ $errors->has('description') ? 'parsley-error' : '' }}" placeholder="Keterangan Kategori" readonly>{{ $category->keterangan }}</textarea>
                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('description') }}</li></ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-warning ml-2" href="/admin/job/category/edit/{{ $category->id }}">
                            Edit Kategori
                        </a>
                        <a class="btn btn-danger ml-2" href="/admin/job/category/delete/{{ $category->id }}">
                            Hapus Kategori
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection