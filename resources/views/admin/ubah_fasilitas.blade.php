@extends('layout.admin')
@section('title','Ubah Fasilitas')

@section('content')
<h2 class="text-center">Ubah Fasilitas</h2>
<form class="form-input" action="/admin/fasilitas/{{$fasilitas->id}}/ubah" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif

    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label for="nama_fasilitas">Nama Fasilitas</label>
        <input type="text" class="form-control" name="nama_fasilitas" id="nama_fasilitas" value="{{ $fasilitas->nama_fasilitas}}">
    </div>

    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $fasilitas->jumlah }}">
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ $fasilitas->keterangan}}">
    </div>

    <button type="submit" class="btn btn-block btn-lg btn-primary">Ubah Data</button>
</form>
@endsection
