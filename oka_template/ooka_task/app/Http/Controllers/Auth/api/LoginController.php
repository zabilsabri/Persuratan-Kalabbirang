<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
    public function index()
    {

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
     *          @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="nik", type="string", example="213123"),
     *              @OA\Property(property="no_telp", type="string", example="0812345"),
     *          )
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
        // dd($request->only('nik', 'nomor_telp'));
        $user = User::where('nik', $request->nik)->first();
        if ($user == null) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ada'
            ], 404);
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        // dd($token);
        if ($request->nik == $user->nik && $request->nomor_telp == $user->nomor_telp) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil Login',
                'access_token' => $token,
                'token_type' => 'Bearer'
            ], 200);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Gagal Login'
            ]);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/register",
     *     tags={"Register Warga"},
     *     summary="Store warga baru",
     *     description="",
     *     operationId="register",
     *     @OA\Parameter(
     *         name="nama",
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
     *         @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="nama", type="string", example="Warga 01"),
     *              @OA\Property(property="username", type="string", example="warga_01"),
     *              @OA\Property(property="nik", type="string", example="11223344"),
     *              @OA\Property(property="ttl", type="date", example="20-12-2023"),
     *              @OA\Property(property="jkl", type="enum", example="eunm(L atau P)"),
     *              @OA\Property(property="alamat", type="string", example="Antang"),
     *              @OA\Property(property="pekerjaan", type="string", example="Mahasiswa"),
     *              @OA\Property(property="nomor_kk", type="string", example="123123"),
     *              @OA\Property(property="nomor_telp", type="string", example="0812345"),
     *              @OA\Property(property="profil", type="string", example="image.jpg,png,jpeg"),
     *              @OA\Property(property="ktp", type="string", example="image.jpg,png,jpeg"),
     *              @OA\Property(property="swafoto_ktp", type="string", example="image.jpg,png,jpeg"),
     *              @OA\Property(property="email", type="string", example="warga@gmail.com"),
     *          )
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/

    public function register(Request $request)
    {

        // dd($request);
        $validate = Validator::make($request->all(), [
            'nama'                      => 'required',
            'password'                  => 'required',
            'username'                  => 'required',
            'nik'                       => 'required',
            'nip'                       => 'required',
            'status_nikah'                       => 'required',
            'kewarganegaraan'                       => 'required',
            'tanggal_lahir'                       => 'required',
            'tempat_lahir'                       => 'required',
            'jkl'                       => 'required',
            'alamat'                    => 'required',
            'pekerjaan'                 => 'required',
            'nomor_kk'                  => 'required',
            'nomor_kp'                  => 'required',
            'nomor_telp'                => 'required',
            'profil'                    => 'required|image|mimes:jpg,jpeg,png',
            'ktp'                       => 'required|image|mimes:jpg,jpeg,png',
            'swafoto_ktp'               => 'required|image|mimes:jpg,jpeg,png',
            'email'                     => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $warga = new User();
        $warga->nama = $request->nama;
        $warga->username = $request->username;
        $warga->nik = $request->nik;
        $warga->nip = $request->nip;
        $warga->status_nikah = $request->status_nikah;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->kewarganegaraan = $request->kewarganegaraan;
        $warga->agama = $request->agama;
        $warga->jkl = $request->jkl;
        $warga->alamat = $request->alamat;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->nomor_kk = $request->nomor_kk;
        $warga->nomor_telp = $request->nomor_telp;
        $warga->nomor_kp = $request->nomor_kp;
        $warga->email = $request->email;


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
        // $warga->ttl = Carbon::now();
        $warga->profil = $namaProfil;
        $warga->ktp = $namaKtp;
        $warga->swafoto_ktp = $namaSwa;
        $warga->role_id = 6;
        $warga->save();
        // $token = $warga->createToken('auth_token')->plainTextToken;
        // dd($token);


        // if ($register)
        return response()->json([
            'status' => 'Sukses Register',
            // 'access_token'  => $token,
            // 'token_type'    => 'Bearer'
        ]);

        return response()->json([
            'status' => 'Gagal Register'
        ]);
    }

    public function logout() {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message'   => 'Sukses Logout'
        ]);
    }


    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return response()->json([
            'status' => 'Sukses Hapus'
        ]);
    }
}
