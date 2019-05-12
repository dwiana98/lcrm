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

    <div id="app">
        <div class="container">

            {{-- header --}}
            <div class="jumbotron py-0 px-0 mb-0">
                <img src="{{ asset('images/header2.jpg')}}" width="100%" alt="Header Image" />
            </div>
            {{-- End Header --}}

            {{-- navbar --}}
            <div class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="/">Beranda</a>
                        <div class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" id="MenuProfil" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                                Profil
                            </a>
                            <div class="dropdown-menu" id="MenuProfil">
                                <a href="/sejarah" class="dropdown-item">Sejarah</a>
                                <a href="/visi_misi" class="dropdown-item">Visi & Misi</a>
                            </div>
                        </div>

                        <div class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" id="MenuInformasi" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">
                                Informasi
                            </a>
                            <div class="dropdown-menu" id="MenuInformasi">
                                <a href="/biaya_belajar" class="dropdown-item">Biaya Belajar</a>
                                <a href="/jadwal" class="dropdown-item">Jadwal Belajar</a>
                                <a href="/fasilitas" class="dropdown-item">Fasilitas</a>
                                <a href="/kontak" class="dropdown-item">Kontak</a>
                            </div>
                        </div>

                        <a class="nav-item nav-link" href="/galeri">Galeri</a>
                        <a class="nav-item nav-link" href="/kuis">Kuis</a>
                        <a class="nav-item nav-link" href="/pendaftaran">Pendaftaran</a>
                    </div>
                </div>
            </div>
            {{-- End Navbar --}}

            {{-- content --}}
            <div class="row">
                {{-- Content --}}
                <div class="col-md-9 mb-3 py-3 px-5">
                    @yield('content')
                </div>
                {{-- End content --}}

                {{-- SideBar --}}
                <div class="col-md-3 mb-3 py-3 px-3">
                    @yield('sidebar')
                </div>
            </div>

            {{-- footer --}}
            <div class="footer py-2 bg-primary text-center">
                @copy_right2019 <br>
                Learning Center Rajawali Methematic Baturaja
            </div>
            {{-- end footer --}}

        </div>
    </div>
    {{-- javascript --}}
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}" charset="utf-8"></script>

    @yield('javascript')
</body>

</html>
