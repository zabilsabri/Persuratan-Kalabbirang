<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // public function login() {
    //     return view('auth.login');
    // }

    public function index () {
        
        return response()->json([
            'status' => 'Data User',
            'data'   => User::all()
        ]);
    }

    public function login(Request $request)
    {   
        // $tes = encrypt('tes');
        // dump($tes);
        // $dec = decrypt($tes);
        // dd($dec);
        // dd($request);
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

        // dd($request);
        $validate = Validator::make($request->all(), [
            'nama'                      => 'required',
            // 'password'                  => 'required',
            'username'                  => 'required',
            'nik'                       => 'required',
            // 'ttl'                       => 'required',
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