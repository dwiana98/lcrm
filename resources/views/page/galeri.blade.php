@extends('layout.app')
@section('title','Galeri')

@section('content')

<div class="row shadow-sm p-3 mb-5 bg-white rounded">
    @foreach ($galleries as $galeri)
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card">
                        <img src="{{ $galeri->foto }}" class="card-img-top" alt="{{ $galeri->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $galeri->judul }}</h5>
                            <p class="card-text"> {{ $galeri->keterangan }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
