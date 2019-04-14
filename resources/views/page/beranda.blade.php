@extends('layout.app')
@section('title','Beranda')

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
        @foreach ($sidebar as $sideArchive)
            <li class="list-group-item"><a href="/archive/{{ $sideArchive->slug }}">{{ $sideArchive->judul }}</a></li>
        @endforeach
    </ul>
</div>
{{-- End List Archive --}}

@endsection

@section('content')
<div class="row">
    @forelse ($archives as $archive)
        <div class="col-md-4 mb-4 shadow p-3 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ $archive->judul }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <i class="mr-2">{{ $archive->nama }}</i>
                        <i class="mr-2">{{ $archive->created_at }}</i>
                    </h6>
                    <p class="card-text"> {{ substr($archive->deskripsi, 0, 150) }} </p>
                    <a href="/archive/{{ $archive->slug }}" class="card-link">Read more</a>
                </div>
            </div>
        </div>
    @empty
        <h2>Data tidak ada</h2>
    @endforelse
    <div class="col-md-12">
        {{ $archives->appends(Request::input())->onEachSide(1)->links() }}
    </div>
</div>
@endsection
