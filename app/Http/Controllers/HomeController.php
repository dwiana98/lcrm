<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Jadwal;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function beranda( Request $request )
    {
        $url = urlencode($request->search);
        if ($request->search == null) {
            $archives = DB::table('archive')->orderBy('archive.created_at', 'desc')->join('users', 'users.id', '=', 'archive.user_id')->paginate(12);
        } else {
            $archives = DB::table('archive')->where('judul', 'LIKE', '%'.str_replace('-', ' ', $url).'%')->orderBy('archive.created_at', 'desc')->join('users', 'users.id', '=', 'archive.user_id')->paginate(12);
        }
        $sidebar = DB::table('archive')->orderBy('id', 'desc')->limit(5)->get();
        return view('page.beranda', ['archives' => $archives, 'sidebar'=> $sidebar]);
    }

    public function single($slug)
    {
        $arc = DB::table('archive')->where('slug', $slug)->join('users', 'users.id', '=', 'archive.user_id')->first();
        $sideArchive = DB::table('archive')->orderBy('id', 'desc')->limit(4)->get();
        return view('page.single-archive', ['archive' => $arc, 'sideArchive' => $sideArchive]);
    }

    public function sejarah()
    {
        return view('page.sejarah');
    }

    public function visi_misi()
    {
        return view('page.visi_misi');
    }

    public function biaya_belajar()
    {
        $costs = DB::table('biaya')->get();
        return view('page.biaya', ['costs' => $costs]);
    }

    public function data_jadwal()
    {
        $days = Day::has('jadwals')->get();
        return view('page.jadwal', ['days' => $days]);
    }

    public function fasilitas()
    {
        $facilitas = DB::table('fasilitas')->get();
        return view('page.fasilitas', ['facilitas' => $facilitas]);
    }

    public function kontak()
    {
        $contacts = DB::table('kontak')->get();
        return view('page.kontak', ['contacts' => $contacts]);
    }

    public function galeri()
    {
        $galleries = DB::table('galeri')->get();
        return view('page.galeri', ['galleries' => $galleries]);
    }

    public function kuis()
    {
        $quises = DB::table('kuis')->get();
        return view('page.kuis', ['quises' => $quises]);
    }

    public function pendaftaran()
    {
        return view('page.pendaftaran');
    }
    public function daftar(Request $r)
    {
        $r->validate([
            'nama' => 'required|regex:/^[a-zA-Z ]+$/',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'hoby' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'no_tlp' => 'required',
            'paket' => 'required',
        ]);

        $user = DB::table('pendaftaran')->insert([
            'nama' => $r->nama,
            'tempat' => $r->tempat,
            'tgl_lahir' => $r->tgl_lahir,
            'alamat' => $r->alamat,
            'gender' => $r->gender,
            'asal_sekolah' => $r->asal_sekolah,
            'kelas' => $r->kelas,
            'hobby' => $r->hoby,
            'nama_ayah' => $r->nama_ayah,
            'nama_ibu' => $r->nama_ibu,
            'no_tlp' => $r->no_tlp,
            'paket' => $r->paket,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }
}
