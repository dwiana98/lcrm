@extends('layout.app')
@section('title','Beranda')

@section('sidebar')
{{-- Form Search --}}
<form action="/" method="get">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Cari...">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
        </div>
    </div>
</form>
{{-- End Form Search --}}
{{-- List Archive --}}
<div class="card bg-info mb-4">
    <div class="card-header text-white">
        Archive
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($sidebar as $sideArchive)
            <li class="list-group-item"><a href="/archive/{{ $sideArchive->slug }}">{{ $sideArchive->judul }}</a></li>
        @endforeach
    </ul>
</div>
    <img class="shadow-lg p-3 rounded" src="{{asset('images/discount.jpg')}}" alt="disc" width="100%">
    <a href="/pendaftaran"><img class="shadow-lg p-3 rounded" src="{{asset('images/pendaftaran.jpg')}}" alt="daftar" width="100%"></a>
{{-- End List Archive --}}

@endsection

@section('content')
<div class="jumbotron bg-white border border-info shadow p-3 mb-5 rounded">
    <h1 style="font-size:40px"> Sambutan Pemilik <br> Learning Center Rajawali Mathematic</h1>
    <p class="lead"> Andre Maulana, A.Ma., S.Pd.</p>
    <hr class="my-4">
    <p class="text-justify">Assalamu'alaikum Wr. Wb</p>
    <p class="text-justify">Salam Hangat Dan Selamat Datang Di Website Bimbel Learning Center Rajawali Mathematic.</p>
    <p class="text-justify">Segala puji tercurahkan atas kehadirat Allah SWT atas limpahan rahmat dan karunia-Nya. Begitu pula tak lupa kita sampaikan salam dan shalawat kepada Junjungan kita Nabi Besar Muhammad SAW beserta keluarga dan sahabat dan kita semua selaku umatnya yang selalu setia mengamalkan ajaran-ajaran dari beliau</p>
    <p class="text-justify">Bimbel Learning Center Rajawali Mathematic adalah lembaga pendidikan non formal yang bergerak di bidang jasa untuk mengisi jam kosong diluar jam sekolah serta membantu sisa-siswi yang memiliki kesulitan dalam mengerjakan tugas ataupun pelajaran disekolah.</p>
    <p class="text-justify">Dengan adanya website ini saya selaku pemilik berharap agar website ini dapat bermanfaat bagi masyarakat dan siswa-siswi yang membutuhkan informasi mengenai bimbingan belajar.</p>
    <p>Wassalamu'alaikum Wr. Wb</p>
</div>
<div class="row">
    @forelse ($archives as $archive)
        <div class="col-md-4 mb-4 shadow p-3 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ $archive->judul }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <i class="mr-2">{{ $archive->nama }}</i>
                        <i class="mr-2">{{ $archive->created_at }}</i>
                    </h6>
                    <p class="card-text"> {{ substr($archive->deskripsi, 0, 150) }} </p>
                    <a href="/archive/{{ $archive->slug }}" class="card-link">Read more</a>
                </div>
            </div>
        </div>
    @empty
        <h2 class="p-3">Data tidak ada</h2>
    @endforelse
    <div class="col-md-12">
        {{ $archives->appends(Request::input())->onEachSide(1)->links() }}
    </div>
</div>
@endsection
