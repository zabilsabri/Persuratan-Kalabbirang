<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index() {
        $beritas_carousel = Berita::latest()->limit(3)->get();
        $beritas_all = Berita::paginate(6);
        return view('user.berita.index')
            ->with(compact('beritas_carousel'))
            ->with(compact('beritas_all'));
    }

    public function detail($id) {
        $beritas = Berita::where('id', $id)->get();
        return view('user.berita.detail')
            ->with(compact('beritas'));
    }
}
