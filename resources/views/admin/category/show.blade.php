@extends('layouts.master')
@section('title', 'Detail Kategori')
@section('content')
<div class="row">
    @if ($errors->any())
        <div class="alert alert-danger error-validation">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <form class="w-100">
        <div class="form-group">
          <label for="name_category">Nama</label>
          <input type="text" class="form-control" id="name_category" placeholder="Nama Kategori" name="name" value="{{ $category->name_category }}" disabled>
        </div>
        <div class="form-group">
          <label for="description_category">keterangan</label>
          <textarea class="form-control" id="description_category" name="description" placeholder="Deskripsi Kategori" disabled>{{ $category->keterangan }}</textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-warning ml-2" href="/admin/job/category/edit/{{ $category->id }}">
                Edit Kategori
            </a>
            <a class="btn btn-danger ml-2" href="/admin/job/category/delete/{{ $category->id }}">
                Hapus Kategori
            </a>
        </div>
    </form>
</div>
@endsection