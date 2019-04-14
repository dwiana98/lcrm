@extends('layout.admin')
@section('title','Dashbord')

@section('content')
<div class="text-center">
    <h2 class="text-large">SELAMAT DATANG</h2>
    <h2>{{Auth::user()->nama}}</h2>
    <img class="shadow-lg p-3 mb-5 rounded" src="{{asset('images/logo.jpg')}}" alt="logo" width="400px" height="400px">
</div>
@endsection
