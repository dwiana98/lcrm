@extends('layout.app')
@section('title','Kontak')

@section('content')
<h2 class="text-center">Info Lebih Lanjut, Hubungi:</h2>
@foreach ($contacts as $contact)
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{$contact->foto}}" class="card-img" width="150" height="200" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="font-size:40px">{{ $contact->nama_kontak }}</h5>
        <p class="card-text" style="font-size:25px">
            {{ $contact->kontak }} <br> {{ $contact->keterangan}}
        </p>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection

@section('sidebar')
    <div class="card shadow-lg">
        <div class="card-header">Map LCRM</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.52165176235!2d104.19424891476021!3d-4.117208697006358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMDcnMDIuMCJTIDEwNMKwMTEnNDcuMiJF!5e0!3m2!1sen!2sid!4v1556681705136!5m2!1sen!2sid" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
@endsection
