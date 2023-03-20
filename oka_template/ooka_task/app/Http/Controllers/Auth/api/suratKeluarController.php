<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\suratKeluar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuratKeluarController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/SuratKeluar",
     *     tags={"SuratKeluar"},
     *     summary="Get all Data suratKeluar",
     *     description="",
     *     operationId="index.suratKeluar",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
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
     */
    public function index() {
        $suratKeluar = suratKeluar::all();
        return response()->json([
            'title'     => 'Data Surat Keluar',
            'Data'      => $suratKeluar
        ]); 
    }

    /**
     * @OA\Post(
     *     path="/api/SuratKeluar/store",
     *     tags={"SuratKeluar"},
     *     summary="Tambah Data suratKeluar",
     *     description="",
     *     operationId="store.suratKeluar",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="",
     *        
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
     */

    public function store(Request $request) {

        // $validate = Validator::make($request->all(), [
        //     'asal_surat'                => 'required',
        //     'no_surat'                  => 'required',
        //     'tujuan_surat'              => 'required',
        //     'status'                    => 'required',
        //     'file_surat'                => 'required|mimes:pdf,docx',
        // ]);

        // if ($validate->fails()) {
        //     return response()->json($validate->errors());
        // }

        $data = $request->all();
        // dd($data);
        // $data['tgl_surat'] = Carbon::now();

        suratKeluar::create($data);
        return response()->json([
            'status' => 'Sukses Tambah'
        ]);

    }

    /**
     * @OA\Get(
     *     path="/api/SuratKeluar/",
     *     tags={"SuratKeluar"},
     *     summary="Show Data arsipKeluar",
     *     description="tambah /id",
     *     operationId="edit.suratKeluar",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="id",
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
     */
    public function edit($id) {
        $suratKeluar = suratKeluar::find($id);
        return response()->json([
            'title'     => 'Data Surat Keluar',
            'Data'      => $suratKeluar
        ]); 
    }

    /**
     * @OA\Put(
     *     path="/api/SuratKeluar/update",
     *     tags={"SuratKeluar"},
     *     summary="update Data suratKeluar",
     *     description="kirim id lewat form",
     *     operationId="update.suratKeluar",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
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
     */

    public function update(Request $request) {
        // dd($request->all());
        $suratKeluar = suratKeluar::find($request->id);
        $data = $request->all();
        // $data['tgl_surat'] = Carbon::now();
        $suratKeluar->update($data);

        return response()->json([
            'status'        => 'Sukses Update'
        ]);

    }

    /**
     * @OA\Delete(
     *     path="/api/SuratKeluar/destroy",
     *     tags={"SuratKeluar"},
     *     summary="Hapus Data suratKeluar",
     *     description="tambah /id",
     *     operationId="delete.suratKeluar",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="id",
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
     */
    public function destroy(Request $request) {
        $data = suratKeluar::find($request->id);
        $data->delete();
        return response()->json([
            'status'        => 'Sukses Hapus'
        ]);
    }
}
