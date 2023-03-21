<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\suratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SuratMasukController extends Controller
{
     /**
     * @OA\Get(
     *     path="/api/SuratMasuk",
     *     tags={"SuratMasuk"},
     *     summary="Get all Data suratMasuk",
     *     description="",
     *     operationId="index.suratMasuk",
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
    public function index()
    {
        return response()->json([
            'status'    => 'Surat Masuk',
            'data'      => suratMasuk::all()
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/SuratMasuk/store",
     *     tags={"SuratMasuk"},
     *     summary="Tambah Data suratMasuk",
     *     description="",
     *     operationId="store.suratMasuk",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : asal_surat, no_surat, tujuan_surat, status('Rahasia', 'Penting', 'Segera', 'Biasa'), file_surat(file)",
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
     * * @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="asal_surat", type="string", example="Lurah "),
     *              @OA\Property(property="no_surat", type="string", example="12/3213/213"),
     *              @OA\Property(property="tujuan_surat", type="string", example="Malino"),
     *              @OA\Property(property="status", type="string", example="'Rahasia', 'Penting', 'Segera', 'Biasa'"),
     *              @OA\Property(property="file_surat", type="string", example="file.pdf,docx"),
     *          )
     *         
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'asal_surat'                => 'required',
            'no_surat'                  => 'required',
            'tujuan_surat'              => 'required',
            'status'                    => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaSurat = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/suratMasuk/'), $namaSurat);
        }
        $data['file_surat'] = $namaSurat;
        $store = suratMasuk::create($data);

        if ($store) {
            return response()->json([
                'status' => 'Sukses Tambah Surat Masuk'
            ]);
        }

        return response()->json([
            'status' => 'Gagal Tambah Surat Masuk'
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/SuratMasuk/",
     *     tags={"SuratMasuk"},
     *     summary="Edit Data suratMasuk",
     *     description="tambah /id",
     *     operationId="edit.suratMasuk",
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

        return response()->json([
            'status' => 'Data edit',
            'data'   => suratMasuk::find($id)
        ]);
    }

    /**
     * @OA\Put(
     *     path="/api/SuratMasuk/update",
     *     tags={"SuratMasuk"},
     *     summary="Update Data suratMasuk",
     *     description="kirim id lewat form",
     *     operationId="update.suratMasuk",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : id, asal_surat, no_surat, tujuan_surat, status('Rahasia', 'Penting', 'Segera', 'Biasa'), file_surat(file)",
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
     * * @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="asal_surat", type="string", example="Lurah "),
     *              @OA\Property(property="no_surat", type="string", example="12/3213/213"),
     *              @OA\Property(property="tujuan_surat", type="string", example="Malino"),
     *              @OA\Property(property="status", type="string", example="'Rahasia', 'Penting', 'Segera', 'Biasa'"),
     *              @OA\Property(property="file_surat", type="string", example="file.pdf,docx"),
     *          )
     *         
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     */
    public function update(Request $request)
    {
        $suratMasuk =  suratMasuk::find($request->id);
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'asal_surat'                => 'required',
            'no_surat'                  => 'required',
            'tujuan_surat'              => 'required',
            'status'                    => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaSurat = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/suratMasuk/'), $namaSurat);
            $data['file_surat'] = $namaSurat;
        } else {
            $suratMasuk->file_surat = $suratMasuk->file_surat;
        }

        $suratMasuk->update($data);

        return response()->json([
            'status' => 'Sukses Edit',

        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/SuratMasuk/destroy",
     *     tags={"SuratMasuk"},
     *     summary="Hapus Data suratMasuk",
     *     description="tambah /id",
     *     operationId="destroy.suratMasuk",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="name field : id",
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
    public function destroy(Request $request)
    {

        $suratMasuk = suratMasuk::find($request->id);
        $suratMasuk->delete();

        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }
}
