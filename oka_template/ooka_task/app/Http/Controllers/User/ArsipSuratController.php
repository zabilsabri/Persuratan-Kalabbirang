<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipSuratController extends Controller
{
    public function index() {
        return view('user.arsipSurat.index');
    }

    public function kosong() {
        return view('user.arsipSurat.kosong');
    }
}
