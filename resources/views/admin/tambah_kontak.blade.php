@extends('layout.admin')
@section('title','Tambah Kontak')

@section('content')
    <h4 class="text-center">Tambah Kontak</h4>
<form class="form-input" action="/admin/tambah_kontak" method="post">
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
        <label for="foto">Foto Kontak</label>
        <input type="text" class="form-control" name="foto" id="foto">
    </div>

    <div class="form-group">
        <label for="nama_kontak">Nama Kontak</label>
        <input type="text" class="form-control" name="nama_kontak" id="nama_kontak">
    </div>

    <div class="form-group">
        <label for="kontak">Kontak</label>
        <input type="text" class="form-control" name="kontak" id="kontak">
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" id="keterangan">
    </div>
    <button type="submit" class="btn btn-block btn-lg btn-primary">Masukan Data</button>
</form>
@endsection
