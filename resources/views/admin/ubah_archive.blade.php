@extends('layout.admin')
@section('title','Archive')

@section('content')
<h2>Ubah Archive</h2>
<form class="form-input" action="/admin/archive/{{$archive->id}}/ubah" method="post">
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
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" value="{{ $archive->judul }}">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" name="deskripsi" placeholder="deskripsi" id="deskripsi" rows="8">{{ $archive->deskripsi}}</textarea>
    </div>

    <button type="submit" class="btn btn-block btn-lg btn-primary">Masukan Data</button>
</form>
@endsection
