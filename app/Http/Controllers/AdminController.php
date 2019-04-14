<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\User;
use App\Models\Jadwal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create()
    {
        $find = User::count();
        if ($find > 0) {
            abort(403);
        }

        $user = User::create([
            'nama' => 'admin',
            'email' => 'admin@email.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        if ($user) {
            return redirect('/login');
        }

    }

    public function login()
    {
        return view('admin.login_admin');
    }

    public function action_login(Request $r)
    {
        $remember = $r->remember ? true : false;
        if (Auth::attempt(['username' => $r->username, 'password' => $r->password], $remember)) {
            return redirect('/admin/dashboard');
        }
        return back()->with('errors', 'Gagal di autentikasi');
    }

    // Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Menu Tambah
    public function archive()
    {
        return view('admin.tambah_archive');
    }

    public function t_archive(Request $r)
    {
        $r->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $archive = DB::table('archive')->insert([
            'slug' => Str::slug($r->judul)."-".time(),
            'judul' => $r->judul,
            'deskripsi' => $r->deskripsi,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }

    public function data_archive()
    {
        $archives = DB::table('archive')->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.data_archive', ['archives' => $archives]);
    }

    public function ubah_archive($id)
    {
        $archives = DB::table('archive')->where('id', $id)->first();
        return view('admin.ubah_archive', ['archive' => $archives]);
    }

    public function update_archive(Request $r, $id)
    {
        $r->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $archive = DB::table('archive')->where('id', $id)->update([
            'judul' => $r->judul,
            'deskripsi' => $r->deskripsi,
        ]);
        return redirect('/admin/data_archive')->with('berhasil', 'Data berhasil di simpan');
    }

    public function hapus_archive($id)
    {
        $archives = DB::table('archive')->where('id', $id)->delete();
        if ($archives) {
            return back()->with('Berhasil', 'Data Berhasil di Hapus');
        }
    }

    // Fasilitas
    public function t_fasilitas()
    {
        return view('admin.tambah_fasilitas');
    }

    public function fasilitas(Request $r)
    {
        $r->validate([
            'nama_fasilitas' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $fasilitas = DB::table('fasilitas')->insert([
            'nama_fasilitas' => $r->nama_fasilitas,
            'jumlah' => $r->jumlah,
            'keterangan' => $r->keterangan,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }

    public function data_fasilitas()
    {
        $facilitas = DB::table('fasilitas')->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.data_fasilitas', ['facilitas' => $facilitas]);
    }

    public function ubah_fasilitas($id)
    {
        $fasilitas = DB::table('fasilitas')->where('id', $id)->first();
        return view('admin.ubah_fasilitas', ['fasilitas'=> $fasilitas]);
    }

    public function update_fasilitas(Request $r, $id)
    {
        $r->validate([
            'nama_fasilitas' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $fasilitas = DB::table('fasilitas')->where('id', $id)->update([
            'nama_fasilitas' => $r->nama_fasilitas,
            'jumlah' => $r->jumlah,
            'keterangan' => $r->keterangan,
        ]);
        return redirect('/admin/data_fasilitas')->with('berhasil', 'Data berhasil di simpan');
    }

    public function hapus_fasilitas($id)
    {
        $facilitas= DB::table('fasilitas')->where('id', $id)->delete();
        if ($facilitas){
            return back()->with('berhasil', 'Data Berhasil di Hapus');
        }
    }


    // Gallery
    public function t_galeri()
    {
        return view('admin.tambah_galeri');
    }

    public function simpan_galeri(Request $r)
    {
        $r->validate([
            'judul' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',
        ]);

        $galeri = DB::table('galeri')->insert([
            'judul' => $r->judul,
            'foto' => $r->foto,
            'keterangan' => $r->keterangan,
        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }

    public function data_galeri()
    {
        $galeris = DB::table('galeri')->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.data_galeri', ['galeris' => $galeris]);
    }

    public function ubah_galeri($id)
    {
        $galeri = DB::table('galeri')->where('id', $id)->first();
        return view('admin.ubah_galeri', ['galeri' => $galeri]);
    }

    public function updated_galeri(Request $r, $id)
    {
        $r->validate([
            'judul' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',
        ]);
        $galeri = DB::table('galeri')->where('id', $id)->update([
            'judul' => $r->judul,
            'foto' => $r->foto,
            'keterangan' => $r->keterangan,
        ]);
        return redirect('/admin/data_galeri')->with('Berhasil', 'Data Berhasil di Ubah');
    }

    public function hapus_galeri($id)
    {
        $galeris = DB::table('galeri')->where('id',$id)->delete();
        if ($galeris){
            return back()->with('Berhasil', 'Data Berhasil di Hapus');
        }
    }

    public function tambah_biaya()
    {
        return view('admin.tambah_biaya_belajar');
    }

    public function biaya(Request $r)
    {
        $r->validate([
            'paket_belajar' => 'required',
            'biaya_belajar' => 'required',
            'keterangan' => 'required',
        ]);

        $biaya = DB::table('biaya')->insert([
            'paket_belajar' => $r->paket_belajar,
            'biaya_belajar' => $r->biaya_belajar,
            'keterangan' => $r->keterangan,
        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }

    public function ubah_biaya($id)
    {
        $biayas = DB::table('biaya')->where('id', $id)->first();
        return view('admin.ubah_biaya_belajar', ['biaya' => $biayas]);
    }

    public function data_biaya()
    {
        $biayas = DB::table('biaya')->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.data_biaya', ['biayas' => $biayas]);
    }

    public function updated_biaya(Request $r, $id)
    {
        $r->validate([
            'paket_belajar' => 'required',
            'biaya_belajar' => 'required',
            'keterangan' => 'required',
        ]);
        $biaya = DB::table('biaya')->where('id', $id)->update([
            'paket_belajar' => $r->paket_belajar,
            'biaya_belajar' => $r->biaya_belajar,
            'keterangan' => $r->keterangan,
        ]);
        return redirect('/admin/data_biaya')->with('Berhasil', 'Data Berhasil di Ubah');
    }

    public function hapus_biaya($id)
    {
        $biayas = DB::table('biaya')->where('id',$id)->delete();
        if ($biayas){
            return back()->with('Berhasil', 'Data Berhasil di Hapus');
        }
    }

    //Jadwal
    public function data_jadwal()
    {
        $days = Day::has('jadwals')->get();
        return view('admin.data_jadwal', ['days' => $days]);
    }

    public function tambah_jadwal()
    {
        $days = Day::all();
        $tutors = DB::table('tutor')->get();
        return view('admin.tambah_jadwal', ['days' => $days, 'tutors'=> $tutors]);
    }

    public function ubah_jadwal($id)
    {
        $days = Day::all();
        $tutors = DB::table('tutor')->get();
        $jadwal = DB::table('jadwal')->where('id', $id)->first();
        return view('admin.ubah_jadwal', ['jadwal'=>$jadwal, 'days'=>$days, 'tutors'=>$tutors]);
    }

    public function updated_jadwal(Request $r, $id)
    {
        $r->validate([
            'waktu' => 'required',
            'mata_pelajaran' => 'required',
            'kelas' => 'required',
            'tutor' => 'required',
        ]);
        $jadwal = DB::table('jadwal')->where('id', $id)->update([
            'day_id' => $r->hari,
            'waktu' => $r->waktu,
            'mata_pelajaran' => $r->mata_pelajaran,
            'kelas' => $r->kelas,
            'tutor' => $r->tutor,
        ]);
        return redirect('/admin/data_jadwal')->with('Berhasil', 'Data Berhasil di Ubah');
    }

    public function hapus_jadwal($id)
    {
        $jadwals = DB::table('jadwal')->where('id',$id)->delete();
        if ($jadwals){
            return back()->with('Berhasil', 'Data Berhasil di Hapus');
        }
    }
    public function simpan_jadwal(Request $r)
    {
        $r->validate([
            'hari' => 'required',
            'waktu' => 'required',
            'mata_pelajaran' => 'required',
            'tutor' => 'required',
        ]);

        $jadwal = DB::table('jadwal')->insert([
            'day_id' => $r->hari,
            'waktu' => $r->waktu,
            'mata_pelajaran' => $r->mata_pelajaran,
            'kelas' => $r->kelas,
            'tutor' => $r->tutor,
        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }

    // Kuis
    public function ubah_kuis()
    {
        return view('admin.data_kuis');
    }

    // Pendaftaran
    public function data_pendaftaran()
    {
        $pendaftarans = DB::table('pendaftaran')->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.data_pendaftaran', ['pendaftarans' => $pendaftarans]);
    }

    public function update_pendaftaran(Request $r, $id)
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

        $pendaftaran = DB::table('pendaftaran')->where('id', $id)->update([
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
        ]);
        return redirect('/admin/data_pendaftaran')->with('Berhasil', 'Data Berhasil di Ubah');
    }


    public function ubah_pendaftaran($id)
    {
        $pendaftaran = DB::table('pendaftaran')->where('id', $id)->first();
        return view('admin.ubah_pendaftaran', ['pendaftaran' => $pendaftaran]);
    }

    public function hapus_pendaftaran($id)
    {
        $pendaftarans = DB::table('pendaftaran')->where('id',$id)->delete();
        if ($pendaftarans){
            return back()->with('berhasil', 'Data Berhasil di Hapus');
        }
    }

    // Kontak
    public function tambah_kontak()
    {
        return view('admin.tambah_kontak');
    }

    public function simpan_kontak(Request $r)
    {
        $r->validate([
            'foto' => 'required',
            'nama_kontak' => 'required',
            'kontak' => 'required',
            'keterangan' => 'required',

        ]);

        $contacts = DB::table('kontak')->insert([
            'foto' => $r->foto,
            'nama_kontak' => $r->nama_kontak,
            'kontak' => $r->kontak,
            'keterangan' => $r->keterangan,

        ]);
        return back()->with('berhasil', 'Data berhasil di simpan');
    }

    public function data_kontak()
    {
        $contacts = DB::table('kontak')->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.data_kontak', ['contacts' => $contacts]);
    }

    public function ubah_kontak($id)
    {
        $kontak = DB::table('kontak')->where('id', $id)->first();
        return view('admin.ubah_kontak', ['kontak' => $kontak]);
    }

    public function update_kontak(Request $r, $id)
    {
        $r->validate([
            'foto' => 'required',
            'nama_kontak' => 'required',
            'kontak' => 'required',
            'keterangan' => 'required',

        ]);

        $contacts = DB::table('kontak')->where('id', $id)->update([
            'foto' => $r->foto,
            'nama_kontak' => $r->nama_kontak,
            'kontak' => $r->kontak,
            'keterangan' => $r->keterangan,

        ]);
        return redirect('/admin/data_kontak')->with('Berhasil', 'Data Berhasil di Ubah');
    }
    public function hapus_kontak($id)
    {
        $contacts = DB::table('kontak')->where('id', $id)->delete();
        if ($contacts) {
            return back();
        }
    }
}
