<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\arsipMasuk;
use Illuminate\Support\Facades\Validator;


class ArsipMasukController extends Controller
{   

     // GET DATA
   
    /**
     * @OA\Get(
     *     path="/api/ArsipMasuk",
     *     tags={"ArsipMasuk"},
     *     summary="Get all Data arsipMasuk",
     *     description="Untuk menambah data arsip harus ada data surat masuk",
     *     operationId="index.arsipMasuk",
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
        $arsip = arsipMasuk::all();
        return response()->json([
            'Title'     => 'Data Arsip Masuk',
            'Data'      => $arsip
        ]);
    }

     // POST DATA
    /**
     * @OA\Post(
     *     path="/api/ArsipMasuk/store",
     *     tags={"ArsipMasuk"},
     *     summary="Store Data arsipMasuk",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="store.arsipMasuk",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : id, suratKeluar_id, file_surat(file)",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="",
     *             
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     * * @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="suratKeluar_id", type="string", example="1"),
     *              @OA\Property(property="file_surat", type="string", example="file.pdf,docx"),
     *          )
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'suratMasuk_id'             => 'required',
            // 'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaArsip = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/arsipMasuk/'), $namaArsip);
        }
        else {
            $namaArsip = null;
        }

        $data['file_surat'] = $namaArsip;
        $store = arsipMasuk::create($data);

        if ($store) {
            return response()->json([
                'status' => 'Sukses Tambah Data'
            ]);
        }

        return response()->json([
            'status' => 'Gagal Tambah Data'
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/ArsipMasuk/",
     *     tags={"ArsipMasuk"},
     *     summary="Get 1 Data arsipMasuk",
     *     description="tambah /id",
     *     operationId="edit.arsipMasuk",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
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
    public function edit($id)
    {
        $arsip = arsipMasuk::find($id);
        return response()->json([
            'Title'     => 'Data Arsip Masuk',
            'Data'      => $arsip
        ]);
    }

    // PUT DATA
    /**
     * @OA\Put(
     *     path="/api/ArsipMasuk/update",
     *     tags={"ArsipMasuk"},
     *     summary="Update Data arsipMasuk",
     *     description="kirim id lewat form",
     *     operationId="update.arsipMasuk",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : id, suratKeluar_id, file_surat(file)",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="",
     *             
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     * * @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="suratKeluar_id", type="string", example="1"),
     *              @OA\Property(property="file_surat", type="string", example="file.pdf,docx"),
     *          )
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
    public function update(Request $request)
    {
        $arsipMasuk =  arsipMasuk::find($request->id);

        $validate = Validator::make($request->all(), [
            'suratMasuk_id'             => 'required',
            // 'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();
        // dd($request->hasFile('file_surat'));
        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaArsip = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/arsipMasuk/'), $namaArsip);
        }
        else {
            $namaArsip = null;
        }

        $data['file_surat'] = $namaArsip;
        $arsipMasuk->update($data);

        if ($arsipMasuk) {
            return response()->json([
                'status' => 'Sukses Edit Data'
            ]);
        }

        return response()->json([
            'status' => 'Gagal Edit Data'
        ]);
    }

    // DELETE DATA
    /**
     * @OA\Delete(
     *     path="/api/ArsipMasuk/destroy",
     *     tags={"ArsipMasuk"},
     *     summary="Hapus Data arsipMasuk",
     *     description="tambah /id",
     *     operationId="destroy.arsipMasuk",
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
     **/

    public function destroy(Request $request)
    {
        // dd($request->id);
        $arsipMasuk = arsipMasuk::find($request->id);
        $arsipMasuk->delete();
        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }
}
