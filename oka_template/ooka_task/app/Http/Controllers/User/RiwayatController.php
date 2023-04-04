<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\suratKeluar;

class RiwayatController extends Controller
{
    public function index() {
        $surats = suratKeluar::where('user_id', Auth::user()->id)->get();
        return view('user.riwayat.index')
            ->with(compact('surats'));
    }
    
    public function kosong() {
        return view('user.riwayat.kosong');
    }
}
