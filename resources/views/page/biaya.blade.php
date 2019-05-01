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

@section('sidebar')
    <div class="card shadow-lg">
        <div class="card-header">Map LCRM</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.52165176235!2d104.19424891476021!3d-4.117208697006358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMDcnMDIuMCJTIDEwNMKwMTEnNDcuMiJF!5e0!3m2!1sen!2sid!4v1556681705136!5m2!1sen!2sid" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
@endsection
