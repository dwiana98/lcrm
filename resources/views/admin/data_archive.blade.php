@extends('layout.admin')
@section('title', 'Data Archive')

@section('content')
<h2 class="mb-4">Data Archive</h2>
@if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil')}}
    </div>
@endif
<table border="1">
    <tr>
        <td>No</td>
        <td>Judul Archive</td>
        <td>Deskripsi</td>
        <td>Option</td>
    </tr>
    @php $i = 1;  @endphp
    @foreach ($archives as $archive)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $archive->judul }}</td>
            <td>{{ $archive->deskripsi }}</td>
            <td>
                <a href="/admin/archive/{{$archive->id}}/ubah" class="mr-3">Ubah</a>
                <a href="/admin/archive/{{$archive->id}}/hapus" class="text-danger">Hapus</a>
            </td>
        </tr>
        @php $i++;  @endphp
    @endforeach
</table>

{{$archives->links()}}

@endsection
