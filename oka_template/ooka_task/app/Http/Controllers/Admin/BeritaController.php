<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Livewire\WithFileUploads;

class BeritaController extends Controller
{

    use WithFileUploads;
    public $gambar;

    public function index() {
        $beritas = Berita::get();
        return view('admin.berita.index')
            ->with(compact('beritas'));
    }

    public function detail($id) {
        $beritas = Berita::where('id', $id)->get();
        return view('admin.berita.detail')
            ->with(compact('beritas'));
    }

    public function edit($id) {
        $beritas = Berita::where('id', $id)->get();
        return view('admin.berita.edit')
            ->with(compact('beritas'));
    }

    public function tambah() {
        return view('admin.berita.tambah');
    }

    public function tambahBeritaProcess(Request $request) {
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->tgl_berita = $request->tgl_berita;
        $berita->tempat_kejadian = $request->tempat_kejadian;
        $berita->penulis = $request->penulis;
        $berita->deskripsi = $request->deskripsi;

        $nama_gambar_berita = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('temp_file/berita/'), $nama_gambar_berita);

        $berita->gambar = $nama_gambar_berita;

        $berita->save();

        return redirect()->route('berita-admin')->with("success", "Berita Berhasil Ditambahkan!");
    }

    public function editBeritaProcess(Request $request, $id) {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->tgl_berita = $request->tgl_berita;
        $berita->tempat_kejadian = $request->tempat_kejadian;
        $berita->penulis = $request->penulis;
        $berita->deskripsi = $request->deskripsi;

        if($request->gambar != null){
            $nama_gambar_berita = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('temp_file/berita/'), $nama_gambar_berita);

            $berita->gambar = $nama_gambar_berita;
        }

        $berita->save();

        return redirect()->route('berita-admin')->with("success", "Berita Berhasil Diedit!");
    }

    public function deleteBerita($id)
    {
        $deleted = Berita::where('id','=', $id)->delete();
        return redirect()->route('berita-admin')->with('success', 'Berita Berhasil Dihapus!');
    }

}
