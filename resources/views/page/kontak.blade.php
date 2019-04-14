@extends('layout.app')
@section('title','Kontak')

@section('content')
<h2 class="text-center">Info Lebih Lanjut, Hubungi:</h2>
@foreach ($contacts as $contact)
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{$contact->foto}}" class="card-img" width="200" height="150" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $contact->nama_kontak }}</h5>
        <p class="card-text">
            {{ $contact->kontak }} <br> {{ $contact->keterangan}}
        </p>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
