@extends('layout.admin')
@section('title','Ubah Galeri')

@section('content')
<h2>Ubah Galeri</h2>
<form action="/admin/galeri/{{$galeri->id}}/ubah" method="post">
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
    @method('PUT')

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" value="{{ $galeri->judul }}">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" name="foto" id="foto" value="{{ $galeri->foto }}">
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" name="keterangan">{{ $galeri->keterangan}}</textarea>
    </div>

    <button type="submit" class="btn btn-block btn-lg btn-primary">Masukan Data</button>
</form>
@endsection
