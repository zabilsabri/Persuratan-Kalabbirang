<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pengantar;
use Auth;

class DokumenController extends Controller
{
    public function index() {
        $pengantar = pengantar::with('suratKeluar')->where('user_id', '=', Auth::user()->id)->get();
        return view('user.dokumen.index')->with(compact('pengantar'));
    }
}
