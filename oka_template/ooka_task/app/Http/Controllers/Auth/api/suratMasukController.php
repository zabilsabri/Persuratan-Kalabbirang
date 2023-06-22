<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\antarMasuk;
use App\Models\arsipMasuk;
use App\Models\notifikasiMasuk;
use App\Models\suratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // validasi role, cuman admin, lurah dan kasi
        $this->authorize('setuju-tidakSetuju');

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaSurat = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/suratMasuk/'), $namaSurat);
        }
        // dd(Auth::user()->id);
        $data['file_surat'] = $namaSurat;
        $data['tujuan_surat_id'] = Auth::user()->id;
        $data['acc_id'] = Auth::user()->id;
        $data['tgl_surat'] = new \DateTime('today');

        
        
        $store = suratMasuk::create($data);
        
        // Create otomatis data ke notifikasi
        $data_notif['suratMasuk_id'] = $store->id;
        $data_notif['keterangan'] = 'Mohon tunggu untuk konfirmasi selanjutnya';
        notifikasiMasuk::create($data_notif);

        // Untuk validasi Data ke antarMasuk atau tidak
        // if ($data['isAntar'] == 1) {
        //     $data_antar['surat_id'] = $store->id;
        //     $data_antar['tgl_pengajuan'] = new \DateTime('today');
        //     // $data_antar['tgl_terima_kurir'] = new \DateTime('today');
        //     $data_antar['status'] = 'On Progress';
        //     antarMasuk::create($data_antar);
        // }
        // else {
        //     $data_arsip['suratMasuk_id'] = $store->id;
        //     $data_arsip['keterangan_status'] = 'Silahkan tunggu konfirmasi';
        //     arsipMasuk::create($data_arsip);
        // }

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

    public function ajukan(Request $request) {

        


        // dd(auth()->user()->nama);
        $this->authorize('setuju-tidakSetuju');

        // $masuk  = notifikasiMasuk::find($request->suratMasuk_id);
        // $namaPenerima = $masuk->suratMasuk->userAcc->nama;
        // dd($namaPenerima);

        $data_surat = suratMasuk::find($request->suratMasuk_id);
        // dd($data_surat);
        if($data_surat == null) {
            return response()->json([
                'status' => false,
                'message' => 'Surat Masuk tidak ada',
            ]);
        }

        $data_antar = [
            'suratMasuk_id' => $request->suratMasuk_id, 
            'keterangan'    => $request->keterangan,
            'status'        => $request->status, 
            'penerima'      => $request->penerima, 
            'instansi'      => $request->instansi, 
            'alamat'        => $request->alamat, 
            'tgl_pengajuan' => new \DateTime('today'), 
        ];
        

        // Surat Diarsipkan
        $data_arsip = [
            'suratMasuk_id'     => $request->suratMasuk_id,
            'keterangan_status' => $request->status,
        ];
        $arsip = arsipMasuk::create($data_arsip);
        
        
        //get data notifikasi surat
        $notifikasi = notifikasiMasuk::find($request->suratMasuk_id);
        
        // surat disetujui dan ubah status di notifikasi surat
        if ($data_antar['status'] == 'Disetujui') {
            
            $antar = antarMasuk::create($data_antar);
            $data_notifikasi = [
                'keterangan' => 'Surat Telah Disetujui',
                'status' => 'Disetujui',
            ];
            
        }
        else {
            $data_notifikasi = [
                'keterangan' => 'Surat Tidak Disetujui',
                'status' => 'Ditolak',
            ];
        }

        $notifikasi->update($data_notifikasi);

        if ($arsip) {
            return response()->json([
                'status' => true,
                'message' => 'Surat masuk berhasil di proses, silahkan cek status surat',
            ]); 
        }
        else {
            return response()->json([
                'status' => false,
                'message' => 'Error',
            ]);
        }
    }

    public function destroy(Request $request)
    {

        $suratMasuk = suratMasuk::find($request->id);
        $suratMasuk->delete();

        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }
}
;