<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda() {
        return view('user.beranda');
    }
    public function riwayat() {
        return view('user.riwayat');
    }
    public function dataSimpan() {
        return view('user.dataSimpan');
    }
}
