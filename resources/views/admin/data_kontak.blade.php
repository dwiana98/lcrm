@extends('layout.admin')
@section('title','Kontak')

@section('content')
<h2 class="mb-4">Kontak</h2>
@if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil')}}
    </div>
@endif
<table border="1">
    <tr>
        <td>No</td>
        <td>Foto Kontak</td>
        <td>Nama Kontak</td>
        <td>Hp</td>
        <td>E-mail</td>
        <td>Option</td>
    </tr>
    @php $i = 1;  @endphp
    @foreach ($contacts as $contact)
        <tr>
            <td>{{ $i }}</td>
            <td><img src="{{ $contact->foto}}" width="200" height="150" alt=""></td>
            <td>{{ $contact->nama_kontak }}</td>
            <td>{{ $contact->hp }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="/admin/kontak/{{$contact->id}}/ubah" class="mr-3">Ubah</a>
                <a href="/admin/kontak/{{$contact->id}}/hapus" class="text-danger">Hapus</a>
            </td>
        </tr>
    @php $i++;  @endphp
    @endforeach
</table>
@endsection
