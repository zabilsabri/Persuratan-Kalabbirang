<?php

namespace App\Http\Controllers\kasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        return view('kasi.profil.index');
    }
    public function edit() {
        return view('kasi.profil.edit');
    }
}
