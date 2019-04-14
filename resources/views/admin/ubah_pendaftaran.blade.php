@extends('layout.admin')
@section('title','Ubah Data Pendaftaran')

@section('content')
<div class="py-4 px-4 border border-info shadow-lg p-3 mb-5 bg-white rounded">
    <h2 class="display-6 text-center">Ubah Formulir Pendaftaran</h2>
    <form class="form-input" action="/admin/pendaftaran/{{$pendaftaran->id}}/ubah" method="post">
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif

        {{ csrf_field() }}
        @method('PUT')
        {{-- Nama --}}
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $pendaftaran->nama }}">
        </div>

        {{-- Tanggal Lahir --}}
        <div class="form-group">
            <label for="ttl">Tempat, Tanggal Lahir</label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="tempat" id="ttl" placeholder="Tempat" value="{{ $pendaftaran->tempat }}">
                </div>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="tgl_lahir" id="date" placeholder="Tanggal" value="{{ $pendaftaran->tgl_lahir }}">
                </div>
            </div>
        </div>

        {{-- Alamat --}}
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" name="alamat" placeholder="Alamat" id="alamat">{{ $pendaftaran->alamat }}</textarea>
        </div>

        {{-- Jenis Kelamin --}}
        <div class="form-group" style="max-width:90px;">
            <label for="gender">Jenis Kelamin</label>
            <select class="form-control" name="gender" id="gender">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>

        {{-- Asal Sekolah --}}
        <div class="form-group">
            <label for="asal">Asal Sekolah</label>
            <input type="text" class="form-control" name="asal_sekolah" id="asal" value="{{ $pendaftaran->asal_sekolah }}">
        </div>

        {{-- Kelas --}}
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $pendaftaran->kelas }}">
        </div>

        {{-- Hobby --}}
        <div class="form-group">
            <label for="hoby">Hobby</label>
            <input type="text" class="form-control" name="hoby" id="hoby" value="{{ $pendaftaran->hobby }}">
        </div>

        {{-- Nama Ayah --}}
        <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{ $pendaftaran->nama_ayah }}">
        </div>

        {{-- Nama Ibu --}}
        <div class="form-group">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="{{ $pendaftaran->nama_ibu }}">
        </div>

        {{-- Nomor Telephone --}}
        <div class="form-group">
            <label for="no_tlp">Nomor Telephone</label>
            <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="{{ $pendaftaran->no_tlp }}">
        </div>

        {{-- Pilihan Paket --}}
        <div class="form-group" style="max-width:90px;">
            <label for="paket">Pilihan Paket</label>
            <select class="form-control" name="paket" id="paket">
                <option value="privat">Privat</option>
                <option value="umum">Umum</option>
            </select>
        </div>
        <button type="submit" class="btn btn-block btn-lg btn-primary">Daftar</button>
    </form>
</div>

@endsection

@section('javascript')
<script type="text/javascript">
    $('#date').datepicker({
        dateFormat: "dd/mm/yy"
    });
    $('option[value={{$pendaftaran->gender}}]').attr('selected', true);
    $('option[value={{$pendaftaran->paket}}]').attr('selected', true);
</script>
@endsection
