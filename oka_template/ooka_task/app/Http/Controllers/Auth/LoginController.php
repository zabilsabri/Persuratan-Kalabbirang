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
            if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp && $user->role_id == '6') {
                Auth::guard('web')->login($user);    
                return redirect()->route('beranda');
            } 
            else if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp && $user->role_id == '1') {
                Auth::guard('web')->login($user);
                return redirect()->route('dashboard-admin');
            } 
            else if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp && $user->role_id == '3' || $user->role_id == '4' || $user->role_id == '5'){
                Auth::guard('web')->login($user);
                return redirect()->route('dashboard-kasi');
            }
            else if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp && $user->role_id == '2'){
                Auth::guard('web')->login($user);
                return redirect()->route('dashboard-lurah');
            }
            else {
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