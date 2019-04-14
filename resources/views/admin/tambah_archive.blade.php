@extends('layout.admin')
@section('title','Archive')

@section('content')
<h2>Tambah Archive</h2>
<form action="/admin/tambah_archive" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @elseif (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil') }}
    </div>
    @endif

    {{ csrf_field() }}

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" name="deskripsi" placeholder="deskripsi" id="deskripsi" rows="8"></textarea>
    </div>

    <button type="submit" class="btn btn-block btn-lg btn-primary">Masukan Data</button>
</form>
@endsection
