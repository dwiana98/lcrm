@extends('layout.admin')
@section('title','Fasilitas')

@section('content')
<h2>Tambah Fasilitas</h2>
<form class="form-input" action="/admin/tambah_fasilitas" method="post">
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
        <label for="nama_fasilitas">Nama Fasilitas</label>
        <input type="text" class="form-control" name="nama_fasilitas" id="nama_fasilitas">
    </div>

    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="text" class="form-control" name="jumlah" id="jumlah">
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" id="keterangan">
    </div>

    <button type="submit" class="btn btn-block btn-lg btn-primary">Masukan Data</button>
</form>
@endsection
