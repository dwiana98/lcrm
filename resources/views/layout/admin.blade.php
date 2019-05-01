<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?p='. time()) }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}" />
</head>

<body>

    {{-- Header --}}
    <nav class="navbar navbar-dark bg-primary sticky-top">
        <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>
    {{-- EndHeader --}}

    {{-- Content --}}
    <div class="container-fluid mb-6">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-md-2 mt-3">
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item"> <a href="/">VISIT WEB</a></li>
                        <li class="list-group-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="list-group-item">
                            <a href="#" class="dropdown-toggle" id="MenuTambah" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                                Tambah
                            </a>
                            <div class="dropdown-menu" id="MenuTambah">
                                <a href="/admin/tambah_archive" class="dropdown-item">Tambah Archive</a>
                                <a href="/admin/tambah_tutor" class="dropdown-item">Tambah Tutor</a>
                                <a href="/admin/tambah_jadwal" class="dropdown-item">Tambah Jadwal</a>
                                <a href="/admin/tambah_kuis" class="dropdown-item">Tambah Kuis</a>
                                <a href="/admin/tambah_kontak" class="dropdown-item">Tambah Kontak</a>
                                <a href="/admin/tambah_fasilitas" class="dropdown-item">Tambah Fasilitas</a>
                                <a href="/admin/tambah_galeri" class="dropdown-item">Tambah Galeri</a>
                            </div>
                            <li class="list-group-item">
                                <a href="#" class="dropdown-toggle" id="MenuData" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                                    Biaya Belajar
                                </a>
                                <div class="dropdown-menu" id="MenuData">
                                    <a href="/admin/tambah_biaya_belajar" class="dropdown-item">Tambah Biaya</a>
                                    <a href="/admin/data_biaya" class="dropdown-item">Data Biaya Belajar</a>
                                </div>
                            </li>
                        <li class="list-group-item">
                            <a href="#" class="dropdown-toggle" id="MenuData" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                                Data
                            </a>
                            <div class="dropdown-menu" id="MenuData">
                                <a href="/admin/data_archive" class="dropdown-item">Data Archive</a>
                                <a href="/admin/data_tutor" class="dropdown-item">Data Tutor</a>
                                <a href="/admin/data_jadwal" class="dropdown-item">Data Jadwal</a>
                                <a href="/admin/data_kuis" class="dropdown-item">Data Kuis</a>
                                <a href="/admin/data_pendaftaran" class="dropdown-item">Data Pendaftaran</a>
                                <a href="/admin/data_galeri" class="dropdown-item">Data Galeri</a>
                                <a href="/admin/data_fasilitas" class="dropdown-item">Data Fasilitas</a>
                                <a href="/admin/data_kontak" class="dropdown-item">Data Kontak</a>
                            </div>
                        </li>
                            <li class="list-group-item"><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
            {{-- Container --}}
            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- footer --}}
    <div class="footer py-2 bg-primary text-center fixed-bottom">
        @copy_right2019 <br>
        Learning Center Rajawali Methematic Baturaja
    </div>
    {{-- end footer --}}


    {{-- javascript --}}
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}" charset="utf-8"></script>

    @yield('javascript')
</body>

</html>
