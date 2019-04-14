@extends('layout.app')
@section('title','Jadwal')

@section('content')
    <H2>JADWAL BIMBINGAN BELAJAR</H2>

<div class="row">
    @foreach ($days as $day)
        <div class="col-md-6 mb-3">
            <div class="card border border-primary">
              <div class="card-header bg-primary text-white">
                {{ $day->day }}
              </div>
              <ul class="list-group list-group-flush">
                @foreach ($day->jadwals as $jadwal)
                    <li class="list-group-item"> {{ $jadwal->waktu }} - {{ $jadwal->mata_pelajaran }} - {{ $jadwal->kelas }} </li>
                @endforeach
              </ul>
            </div>
        </div>
    @endforeach
</div>

@endsection
