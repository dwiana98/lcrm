@extends('layout.app')
@section('title','Fasilitas')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($facilitas as $fasilitas)
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <h2 class="thumbnail">{{ $fasilitas->nama_fasilitas}}</h2>
                        <div class="card-body">
                            <h5 class="card-title">Jumlah {{ $fasilitas->jumlah }}</h5>
                            <p class="card-text">{{ $fasilitas->keterangan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
