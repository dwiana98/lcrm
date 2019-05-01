@extends('layout.app')
@section('title','Kuis')

@section('content')
<h2>KUIS HARI INI</h2>
<div class="row shadow-sm p-3 mb-5 bg-white rounded">
    @foreach ($quises as $kuis)
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card">
                        <img src="{{ $kuis->file }}" class="card-img-top border" alt="{{ $kuis->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kuis->judul }}</h5>
                            <p class="card-text"> {{ $kuis->keterangan }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
