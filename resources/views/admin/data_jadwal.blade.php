@extends('layout.admin')
@section('title','Jadwal Bimbel')

@section('content')
<h2 class="mb-4">Jadwal Bimbel</h2>
@foreach ($days as $day)
<h3> {{ $day->day}}</h3>
<table class="mb-3" border="1" style="width:100%">
    <tr>
        <td>Hari</td>
        <td>Waktu</td>
        <td>Mata Pelajaran</td>
        <td>Kelas</td>
        <td>Tutor</td>
        <td>Option</td>
    </tr>
    @foreach ($day->jadwals as $jadwal )
        <tr>
            <td>{{ $jadwal->day->day }}</td>
            <td>{{ $jadwal->waktu }}</td>
            <td>{{ $jadwal->mata_pelajaran }}</td>
            <td>{{ $jadwal->kelas }}</td>
            <td>{{ $jadwal->tutor }}</td>
            <td>
                <a href="/admin/jadwal/{{$jadwal->id}}/ubah">Ubah</a>
                <a class="text-danger" href="/admin/jadwal/{{$jadwal->id}}/hapus">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
@endforeach
@endsection
