@extends('layout.admin')
@section('title', 'Data Galeri')

@section('content')
<h2 class="mb-4">Data Galeri</h2>
@if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil')}}
    </div>
@endif
<div class="overflow">
    <table border="1">
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Foto</td>
            <td>Keterangan</td>
            <td>Option</td>
        </tr>
        @php $i = 1;  @endphp
        @foreach ($galeris as $galeri)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $galeri->judul }}</td>
                <td>{{ $galeri->foto }}</td>
                <td>{{ $galeri->keterangan }}</td>
                <td>
                    <a href="/admin/galeri/{{$galeri->id}}/ubah" class="mr-3">Ubah</a>
                    <a href="/admin/galeri/{{$galeri->id}}/hapus" class="text-danger">Hapus</a>
                </td>
            </tr>
        @php $i++;  @endphp
        @endforeach
    </table>
</div>

@endsection
