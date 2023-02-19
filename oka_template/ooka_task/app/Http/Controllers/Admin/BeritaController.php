<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        return view('admin.berita.index');
    }

    public function detail() {
        return view('admin.berita.detail');
    }

    public function edit() {
        return view('admin.berita.edit');
    }

    public function tambah() {
        return view('admin.berita.tambah');
    }

}
