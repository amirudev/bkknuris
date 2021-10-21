@extends('layouts.master')
@section('title', 'Tambah Kategori')
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
    <form class="w-100" method="POST" action="/admin/job/category/store">
        @csrf
        <div class="form-group">
          <label for="name_category">Nama</label>
          <input type="text" class="form-control" id="name_category" placeholder="Nama Kategori" name="name">
        </div>
        <div class="form-group">
          <label for="description_category">Keterangan</label>
          <textarea class="form-control" id="description_category" name="description" placeholder="Deskripsi Kategori"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
        </div>
    </form>
</div>
@endsection