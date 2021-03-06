@extends('layouts.master')
@section('title', 'Kategori')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-3">
            <div class="card-body">

                <h4 class="mt-0 header-title">Tambah Kategori</h4>
                <p class="text-muted mb-3 font-14">Tambahkan kategori baru</p>

                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                <form class="w-100" method="POST" action="/admin/job/category/store">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}" type="text" placeholder="Nama Kategori" id="name" name="name">
                            @if($errors->has('name'))
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('name') }}</li></ul>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control {{ $errors->has('description') ? 'parsley-error' : '' }}" placeholder="Keterangan Kategori"></textarea>
                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('description') }}</li></ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Data Category</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Category</th>
                                <th>Keterangan</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $category->name_category }}</td>
                                <td>{{ $category->keterangan }}</td>
                                <td>
                                    <a class="btn btn-success m-1" href="/admin/job/category/{{ $category->id }}">
                                        Lihat
                                    </a>
                                    <a class="btn btn-warning m-1" href="/admin/job/category/edit/{{ $category->id }}">
                                        Edit Kategori
                                    </a>
                                    <a class="btn btn-danger m-1" href="/admin/job/category/delete/{{ $category->id }}">
                                        Hapus Kategori
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
