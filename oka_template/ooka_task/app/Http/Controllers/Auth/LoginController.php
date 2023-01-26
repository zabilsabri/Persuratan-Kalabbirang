<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {

        return view('auth.login');
    }
    
    public function login_proses(Request $request) {

        $nik = $request->nik;
        $no_telp = $request->no_telp;

        
        // Sidebar Admin
        if ($nik == 1 || $no_telp == 1) {
            // $request->session()->regenerate();
            $data = $request->session()->put('role', 'Admin');
            return redirect()->route('dashboard');
        }
        // Sidebar Kasi 
        else if ($nik == 2 || $no_telp == 2) {
            // $request->session()->regenerate();
            $data = $request->session()->put('role', 'Kasi');
            return redirect()->route('dashboard');
        }
        // Sidebar Lurah
        else if ($nik == 3 || $no_telp == 3) {
            // $request->session()->regenerate();
            $data = $request->session()->put('role', 'Lurah');
            return redirect()->route('dashboard');
        }

        return redirect(route('login'));

    }
}
