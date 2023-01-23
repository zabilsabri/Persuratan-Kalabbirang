<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratKeluarController extends Controller
{
    public function detail() {
        return view('admin.suratKeluar.detail');
    }
    public function disposisi() {
        return view('admin.suratKeluar.disposisi');
    }
    public function input() {
        return view('admin.suratKeluar.input');
    }
    public function index() {
        return view('admin.suratKeluar.index');
    }
}
