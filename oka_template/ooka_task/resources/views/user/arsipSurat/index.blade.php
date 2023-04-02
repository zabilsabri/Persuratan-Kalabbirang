@extends('user.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/arsipSurat.css') }}">
    <div class="container-md  py-4">

        <div class="header mb-5">
            <h1 class="text-dark text-center">
                <b>
                    Pengarsipan Surat
                </b>
            </h1>
        </div>

        <table class="table" id="tableArsipSurat">
            <thead style="background-color: #CCFFDA;" >
                <tr>
                    <th scope="col" style="width: 10px;">No</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">No. Surat</th>
                    <th scope="col">Tgl Selesai</th>
                    <th scope="col" style="width: 200px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: white;">
                    <td scope="col">1</td>
                    <td scope="col">Hip Hop</td>
                    <td scope="col">Hip Hop</td>
                    <td scope="col">Hip Hop</td>
                    <td>
                        {{-- Detail --}}
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">
                            <i class="ion ion-information"></i>
                        </a>
                        {{-- Edit --}}
                        <a href="#" class="btn btn-primary">
                            <i class="ion ion-compose"></i>
                        </a>
                        {{-- Hapus --}}
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                            <i class="ion ion-trash-a"></i>
                        </button>
                    </td>                        </tr>
                <tr style="background-color: white;">
                    <td scope="col">2</td>
                    <td scope="col">Jazz</td>
                    <td scope="col">Jazz</td>
                    <td scope="col">Jazz</td>
                    <td>
                        {{-- Detail --}}
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">
                            <i class="ion ion-information"></i>
                        </a>
                        {{-- Edit --}}
                        <a href="#" class="btn btn-primary">
                            <i class="ion ion-compose"></i>
                        </a>
                        {{-- Hapus --}}
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                            <i class="ion ion-trash-a"></i>
                        </button>
                    </td>                        </tr>
                <tr style="background-color: white;">
                    <td scope="col">3</td>
                    <td scope="col">Jazz</td>
                    <td scope="col">Jazz</td>
                    <td scope="col">Jazz</td>
                    <td>
                        {{-- Detail --}}
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">
                            <i class="ion ion-information"></i>
                        </a>
                        {{-- Edit --}}
                        <a href="#" class="btn btn-primary">
                            <i class="ion ion-compose"></i>
                        </a>
                        {{-- Hapus --}}
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                            <i class="ion ion-trash-a"></i>
                        </button>
                    </td>                        </tr>
                <tr style="background-color: white;">
                    <td scope="col">4</td>
                    <td scope="col">Jazz</td>
                    <td scope="col">Jazz</td>
                    <td scope="col">Jazz</td>
                    <td>
                        {{-- Detail --}}
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">
                            <i class="ion ion-information"></i>
                        </a>
                        {{-- Edit --}}
                        <a href="#" class="btn btn-primary">
                            <i class="ion ion-compose"></i>
                        </a>
                        {{-- Hapus --}}
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                            <i class="ion ion-trash-a"></i>
                        </button>
                    </td>                        
                </tr>
            </tbody>
        </table>

    </div>

    {{-- Modal After Klik --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Arsip Surat</h1>
                    <h6 class="modal-title text-success">No : Nomor Surat</h6>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <td class=" fw-bold">Tanggal Pengajuan</td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                2 Januari 2023
                            </td>
                        </tr>

                        <tr>
                            <td class=" fw-bold">Tanggal Selesai</td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                2 Januari 2023
                            </td>
                        </tr>

                        <tr>
                            <td class=" fw-bold">
                                Jenis Surat

                            </td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                Surat Pengantar
                            </td>
                        </tr>

                        <tr>
                            <td class=" fw-bold">Penandatanganan</td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                Ahmad Santoso
                            </td>
                        </tr>

                        <tr class=" fw-bold">
                            <td>Lampiran</td>
                        </tr>

                    </table>
                    <div class="text-center py-2">

                        <img src="{{ asset('image/berita1.png') }}" class="img-fluid" alt="...">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
