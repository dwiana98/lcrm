@extends('layout.admin')
@section('title','Data Fasilitas')

@section('content')
<h2 class="mb-4">Data Fasilitas</h2>
@if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil')}}
    </div>
@endif
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Fasilitas</td>
        <td>Jumlah</td>
        <td>Keterangan</td>
        <td>Option</td>
    </tr>
    @php $i = 1;  @endphp
    @foreach ($facilitas as $fasilitas)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $fasilitas->nama_fasilitas }}</td>
            <td>{{ $fasilitas->jumlah }}</td>
            <td>{{ $fasilitas->keterangan }}</td>
            <td>
                <a href="/admin/fasilitas/{{$fasilitas->id}}/ubah" class="mr-3">Ubah</a>
                <a href="/admin/fasilitas/{{$fasilitas->id}}/hapus" class="text-danger">Hapus</a>
            </td>
        </tr>
    @php $i++;  @endphp
    @endforeach
</table>

@endsection
