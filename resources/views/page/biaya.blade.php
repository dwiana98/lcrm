@extends('layout.app')
@section('title','Biaya Belajar')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($costs as $cost)
            <div class="col-md-6">
                <div class="card" style="height: 100%;">
                    <h2 class="thumbnail">{{ $cost->paket_belajar }}</h2>
                    <div class="card-body">
                        <h5 class="card-title">Rp. {{ $cost->biaya_belajar }}</h5>
                        <p class="card-text">{{ $cost->keterangan }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
