@extends('layout.admin')
@section('title','Tambah Jadwal Bimbel')

@section('content')
<h4 class="mb-4">Tambah Jadwal</h4>
<form class="" action="/admin/tambah_jadwal" method="post">
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

    <div class="form-group mb-3">
        <label for="hari">Hari</label>
        <select class="form-control" name="hari" id="hari">
            @foreach ($days as $day)
            <option value="{{ $day->id }}">{{ $day->day }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="waktu">Waktu</label>
        <input type="text" class="form-control" name="waktu" id="waktu">
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" name="kelas" id="kelas" autocomplete="off">
    </div>
    <div class="form-group mb-3">
        <label for="tutor">Tutor</label>
        <select class="form-control" name="tutor" id="tutor">
            @foreach ($tutors as $tutor)
            <option value="{{ $tutor->nama_tutor }}">{{ $tutor->nama_tutor }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
