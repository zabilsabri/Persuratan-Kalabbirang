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
    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function loginWeb(Request $request)
    {   
        $request->validate([
            'nik'=>'required',
            'nomor_telp'=>'required',
        ]);

        $user = User::where('nik', $request->nik)->first();
        if(isset($user -> nik)){
            if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp) {
                Auth::login($user);    
                return redirect()->route('beranda');
            } else {
                dd($request->all());
            }
        } else {
            dd($request->all());
        }
    }

    public function registerWeb(Request $request)
    {   
        $request->validate([
            'nama'                      => 'required|unique:users',
            'username'                  => 'required|unique:users',
            'nik'                       => 'required|unique:users',
            'nomor_kk'                  => 'required',
            'nomor_telp'                => 'required',
            'ktp'                       => 'required',
            // 'swafoto_ktp'               => 'required',
            'email'                     => 'required|unique:users'
        ]);


        $user = new User();
        $user->nama = $request->nama;
        $user->username = $request->userName;
        $user->nik = $request->nik;
        $user->nomor_kk = $request->nomor_kk;
        $user->email = $request->email;

        if($request-file('ktp')){
            $request->file('ktp')->move('fotoKTP/', $request->file('ktp')->getClientOriginalName());
            $user->ktp = $request->file('ktp')->getClientOriginalName();
        }

        // if($request-file('swafoto_ktp')){
        //     $request->file('swafoto_ktp')->move('fotoswafoto_ktp/', $request->file('swafoto_ktp')->getClientOriginalName());
        //     $user->swafoto_ktp = $request->file('swafoto_ktp')->getClientOriginalName();
        // }

        $user->save();
    
    }

    public function login(Request $request)
    {   
        // $tes = encrypt('tes');
        // dump($tes);
        // $dec = decrypt($tes);
        // dd($dec);
        // dd();
        $user = User::where('nik', $request->nik)->first();
        if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp) {
            return response()->json([
                'status' => 'Berhasil'
            ], 200);
        } else {
            return response()->json([
                'status' => 'Gagal'
            ], 401);
        }
    }
    
    public function register(Request $request) {
        $validate = Validator::make($request->all(), [
            'nama'                      => 'required',
            // 'password'                  => 'required',
            'username'                  => 'required',
            'nik'                       => 'required',
            'ttl'                       => 'required',
            'jkl'                       => 'required',
            'alamat'                    => 'required',
            'pekerjaan'                 => 'required',
            'nomor_kk'                     => 'required',
            'nomor_telp'                   => 'required',
            'profil'                    => 'required',
            'ktp'                       => 'required',
            'email'                     => 'required',
        ]);
        
        if ($validate->fails()) {
            return response()->json($validate->errors());
        }
        
        
        $register = User::create([
            'nama'                      => $request->nama,
            // 'password'                  => encrypt($request->password),
            'username'                  => $request->username,
            'nik'                       => $request->nik,
            'ttl'                       => Carbon::now(),
            'jkl'                       => $request->jkl,
            'alamat'                    => $request->alamat,
            'pekerjaan'                 => $request->pekerjaan,
            'nomor_kk'                     => $request->nomor_kk,
            'nomor_telp'                   => $request->nomor_telp,
            'profil'                    => $request->profil,
            'ktp'                       => $request->ktp,
            'email'                     => $request->email,
        ]); 

        if ($register)
        return response()->json([
            'status' => 'Sukses Register'
        ]);

        return response()->json([
            'status' => 'Gagal Register'
        ]);
    }

}