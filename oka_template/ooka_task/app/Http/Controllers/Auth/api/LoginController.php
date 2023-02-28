<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
            'profil'                    => 'required|image|mimes:jpg,jpeg,png',
            'ktp'                       => 'required|image|mimes:jpg,jpeg,png',
            'swafoto_ktp'               => 'required|image|mimes:jpg,jpeg,png',
            'email'                     => 'required',
        ]);
        
        if ($validate->fails()) {
            return response()->json($validate->errors());
        }
        
        $data = $request->all();

        if ($request->hasFile('profil')) {
            $profil = $request->file('profil');
            $namaProfil = $profil->getClientOriginalName();
            $request->profil->move(public_path('image/profil/'), $namaProfil);
            // dd($pathProfil);
        }
        if ($request->hasFile('ktp')) {
            $ktp = $request->file('ktp');
            $namaKtp = $ktp->getClientOriginalName();
            $request->ktp->move(public_path('image/ktp/'), $namaKtp);
        }
        if ($request->hasFile('swafoto_ktp')) {
            $swafoto = $request->file('swafoto_ktp');
            $namaSwa = $swafoto->getClientOriginalName();
            $request->swafoto_ktp->move(public_path('image/ktp/swafoto/'), $namaSwa);
        }

        // dd($pathProfil);
        $data['ttl'] = Carbon::now();
        $data['profil'] = $namaProfil;
        $data['ktp'] = $namaKtp;
        $data['swafoto_ktp'] = $namaSwa;
        $data['role_id'] = 4;

        $register = User::create($data);

        if ($register)
        return response()->json([
            'status' => 'Sukses Register'
        ]);

        return response()->json([
            'status' => 'Gagal Register'
        ]);

    }

}