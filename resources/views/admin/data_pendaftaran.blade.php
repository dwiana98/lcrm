@extends('layout.admin')
@section('title','Pendaftaran')

@section('content')
    <h2>Data Pendaftaran</h2>
    @if (session('berhasil'))
        <div class="alert alert-success">
            {{ session('berhasil')}}
        </div>
    @endif
<div class="overflow">
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tempat</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Asal Sekolah</td>
            <td>Kelas</td>
            <td>Hobby</td>
            <td>Nama Ayah</td>
            <td>Nama Ibu</td>
            <td>No Telphone</td>
            <td>Pilihan Paket</td>
            <td>Option</td>
        </tr>
        @php $i = 1;  @endphp
        @foreach ($pendaftarans as $pendaftaran)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $pendaftaran->nama }}</td>
                <td>{{ $pendaftaran->tempat }}</td>
                <td>{{ $pendaftaran->tgl_lahir }}</td>
                <td>{{ $pendaftaran->alamat }}</td>
                <td>{{ $pendaftaran->gender }}</td>
                <td>{{ $pendaftaran->asal_sekolah }}</td>
                <td>{{ $pendaftaran->kelas}}</td>
                <td>{{ $pendaftaran->hobby}}</td>
                <td>{{ $pendaftaran->nama_ayah }}</td>
                <td>{{ $pendaftaran->nama_ibu }}</td>
                <td>{{ $pendaftaran->no_tlp }}</td>
                <td>{{ $pendaftaran->paket }}</td>
                <td>
                    <a href="/admin/pendaftaran/{{$pendaftaran->id}}/ubah" class="mr-3">Ubah</a>/
                    <a href="/admin/pendaftaran/{{$pendaftaran->id}}/hapus" class="text-danger">Hapus</a>
                </td>
            </tr>
            @php $i++; @endphp
        @endforeach
    </table>
</div>
@endsection
