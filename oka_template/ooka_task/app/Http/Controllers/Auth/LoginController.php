<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index() {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {   
        $request->validate([
            'nik'=>'required',
            'nomor_telp'=>'required',
        ]);

        $user = User::where('nik', $request->nik)->first();
        if(isset($user -> nik)){
            if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp) {
                Auth::guard('web')->login($user);    
                return redirect()->route('beranda');
            } else {
                return redirect()->route('login')->with('failed', 'NIK atau Nomor Telpon Anda Salah!');
            }
        } else {
            return redirect()->route('login')->with('failed', 'NIK atau Nomor Telpon Anda Salah!');
        }
    }

    public function logout()
    {
        Auth::Logout(); 
        return redirect()->route('beranda');
    }

}