@extends('layout.admin')
@section('title','Data Biaya Belajar')

@section('content')
<h2 class="mb-4">Data Biaya Belajar</h2>
@if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil')}}
    </div>
@endif
<table border="1">
    <tr>
        <td>No</td>
        <td>Paket Belajar</td>
        <td>Biaya Belajar</td>
        <td>Keterangan</td>
        <td>Option</td>
    </tr>
    @php $i = 1;  @endphp
    @foreach ($biayas as $biaya)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $biaya->paket_belajar }}</td>
            <td>{{ $biaya->biaya_belajar }}</td>
            <td>{{ $biaya->keterangan }}</td>
            <td>
                <a href="/admin/biaya/{{$biaya->id}}/ubah" class="mr-3">Ubah</a>
                <a href="/admin/biaya/{{$biaya->id}}/hapus" class="text-danger">Hapus</a>
            </td>
        </tr>
    @php $i++; @endphp
    @endforeach
</table>

@endsection
