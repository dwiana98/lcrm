@extends('layout.admin')
@section('title','Ubah Jadwal Bimbel')

@section('content')
<h4 class="mb-4">Ubah Jadwal</h4>
<form class="form-input" action="/admin/jadwal/{{$jadwal->id}}/ubah" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif

    {{ csrf_field() }}
    @method('PUT')

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
        <input type="text" class="form-control" name="waktu" id="waktu" value="{{ $jadwal->waktu }}">
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" autocomplete="off" value="{{ $jadwal->mata_pelajaran }}">
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" name="kelas" id="kelas" autocomplete="off" value="{{ $jadwal->kelas}}">
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
