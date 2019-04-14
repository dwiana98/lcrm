@extends('layout.admin')
@section('title','Data Tutor')

@section('content')
<h2 class="mb-4">Data Tutor</h2>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Tutor</td>
        <td>Mata Pelajaran</td>
        <td>Kode</td>
        <td>Option</td>
    </tr>
    @php $i = 1;  @endphp
    @foreach ($tutors as $tutor)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $tutor->nama_tutor }}</td>
            <td>{{ $tutor->mata_pelajaran }}</td>
            <td>{{ $tutor->kode }}</td>
            <td>
                <a href="/admin/tutor/{{$tutor->id}}/ubah" class="mr-3">Ubah</a>
                <a href="/admin/tutor/{{$tutor->id}}/hapus" class="text-danger">Hapus</a>
            </td>
        </tr>
    @php $i++;  @endphp
    @endforeach
</table>
@endsection
