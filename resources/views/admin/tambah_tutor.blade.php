@extends('layout.admin')
@section('title','Tambah Tutor')

@section('content')
    <h4 class="text-center">Tambah Tutor</h4>
<form class="form-input" action="/admin/tambah_tutor" method="post">
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
        <label for="nama_tutor">Nama Tutor</label>
        <input type="text" class="form-control" name="nama_tutor" id="nama_tutor">
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran">
    </div>
    <div class="form-group">
        <label for="kode">Kode Tutor</label>
        <input type="text" class="form-control" name="kode" id="kode">
    </div>
    <button type="submit" class="btn btn-block btn-lg btn-primary">Masukan Data</button>
</form>
@endsection
