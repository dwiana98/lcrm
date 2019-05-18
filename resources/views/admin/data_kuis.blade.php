@extends('layout.admin')
@section('title','Data Kuis')

@section('content')
    <h2 class="mb-4">Data Kuis</h2>
    @if (session('berhasil'))
        <div class="alert alert-success">
            {{ session('berhasil')}}
        </div>
    @endif
    <table border="1">
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>File</td>
            <td>Keterangan</td>
            <td>Option</td>
        </tr>
        @php $i = 1;  @endphp
        @foreach ($quis as $kuis)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $kuis->judul }}</td>
                <td>{{ $kuis->file }}</td>
                <td>{{ $kuis->keterangan }}</td>
                <td>
                    <a href="/admin/kuis/{{$kuis->id}}/ubah" class="mr-3">Ubah</a>
                    <a href="/admin/kuis/{{$kuis->id}}/hapus" class="text-danger">Hapus</a>
                </td>
            </tr>
        @php $i++;  @endphp
        @endforeach
    </table>
@endsection
