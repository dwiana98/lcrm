@extends('layout.app')
@section('title','LogIn Admin')

@section('content')
<form class="form-input py-4 px-4 border border-info" action="/login" method="post">
    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <div class="form-group">
        <label for="user">Username</label>
        <input type="text" class="form-control" name="username" id="user" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    {{ csrf_field() }}
    {{-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember" value="true">
        <label class="form-check-label" for="remember">Biarkan Tetap Masuk</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
