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
    
    /**
     * @OA\Get(
     *     path="/api/login",
     *     tags={"Login"},
     *     summary="Get all Data User",
     *     description="",
     *     operationId="index.login",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="no_telp, nik",
     *             
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
    public function index () {
        
        return response()->json([
            'status' => 'Data User',
            'data'   => User::all()
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Cek Login"},
     *     summary="Prose Login",
     *     description="Untuk menambah data arsip harus ada data surat keluar",
     *     operationId="login",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : no_telp, nik",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
    public function login(Request $request)
    {   
        
        $user = User::where('nik', $request->nik)->first();
        if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp) {
            return response()->json([
                'status' => 'Berhasil Login'
            ], 200);
        } else {
            return response()->json([
                'status' => 'Gagal Login'
            ], 401);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/register",
     *     tags={"Register Warga"},
     *     summary="",
     *     description="",
     *     operationId="register",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : nama, username, nik, ttl, jkl(L, P), alamat, pekerjaan, nomor_kk, nomor_telp, profile(file image), ktp(file image), swafoto_ktp(file image), email",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
    
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


    public function destroy($id) {
        $data = User::find($id);
        $data->delete();
        return response()->json([
            'status' => 'Sukses Hapus'
        ]);
    }

}