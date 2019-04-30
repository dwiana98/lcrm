@extends('layout.admin')
@section('title',' Ubah Kuis')

@section('content')
<h2>Ubah Kuis</h2>
<form class="form-input" action="/admin/kuis/{{$kuis->id}}/ubah" method="post">
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
        <input type="text" class="form-control" name="judul" id="judul" value="{{$kuis->judul}}">
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="text" class="form-control" name="file" id="file" value="{{$kuis->file}}">
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$kuis->keterangan}}">
    </div>

    <button type="submit" class="btn btn-block btn-lg btn-primary">Ubah Data</button>
</form>
@endsection
