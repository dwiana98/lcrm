@extends('layout.admin')
@section('title','Ubah Biaya Belajar')

@section('content')
<h2>Ubah Biaya Belajar</h2>
<form class="form-input" action="/admin/biaya/{{$biaya->id}}/ubah" method="post">
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
        <label for="paket_belajar">Paket Belajar</label>
        <input type="text" class="form-control" name="paket_belajar" id="paket_belajar" value="{{ $biaya->paket_belajar }}">
    </div>
    <div class="form-group">
        <label for="biaya_belajar">Biaya Belajar</label>
        <input type="text" class="form-control" name="biaya_belajar" id="biaya_belajar" autocomplete="off" value="{{ $biaya->biaya_belajar }}">
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" class="form-control" name="keterangan" placeholder="keterangan" id="keterangan" rows="8">{{ $biaya->keterangan }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
@endsection
