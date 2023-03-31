<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index() {
        return view('user.berita.index');
    }

    public function detail($id) {
        $beritas = Berita::where('id', $id)->get();
        return view('user.berita.detail')
            ->with(compact('beritas'));
    }
}
