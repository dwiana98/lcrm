@extends('layout.admin')
@section('title','Biaya Belajar')

@section('content')
    <h2>Biaya Belajar</h2>
    <form class="" action="/admin/tambah_biaya_belajar" method="post">
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
            <label for="paket_belajar">Paket Belajar</label>
            <input type="text" class="form-control" name="paket_belajar" id="paket_belajar">
        </div>
        <div class="form-group">
            <label for="biaya_belajar">Biaya Belajar</label>
            <input type="text" class="form-control" name="biaya_belajar" id="biaya_belajar" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" name="keterangan" placeholder="keterangan" id="keterangan" rows="8"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
