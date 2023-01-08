<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda() {
        return view('user.beranda');
    }
    
    public function dataSimpan() {
        return view('user.dataSimpan');
    }
    public function dataUbah() {
        return view('user.dataUbah');
    }
    public function bantuan() {
        return view('user.bantuan');
    }
    public function profilUserLogin() {
        return view('user.profil_login');
    }
}
