@extends('layout.app')
@section('title','Archive')

@section('sidebar')
{{-- Form Search --}}
<form action="/" method="get">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Cari...">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
        </div>
    </div>
</form>
{{-- End Form Search --}}
{{-- List Archive --}}
<div class="card bg-info mb-4">
    <div class="card-header text-white">
        Archive
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($sideArchive as $content)
            <li class="list-group-item"><a href="">{{ $content->judul }}</a></li>
        @endforeach
    </ul>
</div>
{{-- End List Archive --}}

<div id="kalender"></div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $archive->judul }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <i class="mr-3">Post By : {{ $archive->nama }}</i>
                <i class="mr-3">Date : {{ $archive->created_at }}</i>
            </h6>
            <p class="card-text">
                {{ $archive->deskripsi }}
            </p>
        </div>
    </div>
@endsection
