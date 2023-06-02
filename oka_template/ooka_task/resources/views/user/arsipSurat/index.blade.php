@extends('user.layouts.app', ['title' => 'Arsip Surat'])

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

        <table class="table" id="tableArsipSurat" style="width: 100%;">
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
                @foreach($arsips as $index => $arsip)
                <tr style="background-color: white;">
                    <td scope="col">{{ $index + 1 }}</td>
                    <td scope="col">{{ $arsip -> jenisSurat -> nama }}</td>
                    <td scope="col">{{ $arsip -> no_surat }}</td>
                    <td scope="col">{{ $arsip -> arsipKeluar -> created_at}}</td>
                    <td>
                        {{-- Detail --}}
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">
                            <i class="ion ion-information"></i>
                        </a>
                        {{-- Modal After Klik --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header d-block">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Arsip Surat</h1>
                                        <h6 class="modal-title text-success">No : {{ $arsip -> no_surat }}</h6>
                                    </div>
                                    <div class="modal-body">
                                        <table>
                                            <tr>
                                                <td class=" fw-bold">Tanggal Pengajuan</td>
                                                <td>
                                                    &emsp; &emsp; : &nbsp;
                                                </td>
                                                <td class="text-success fw-bold">
                                                    {{ $arsip -> created_at }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=" fw-bold">Tanggal Selesai</td>
                                                <td>
                                                    &emsp; &emsp; : &nbsp;
                                                </td>
                                                <td class="text-success fw-bold">
                                                    {{$arsip -> arsipKeluar -> created_at}}
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
                                                    {{ $arsip -> jenisSurat -> nama }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=" fw-bold">Penandatanganan</td>
                                                <td>
                                                    &emsp; &emsp; : &nbsp;
                                                </td>
                                                <td class="text-success fw-bold">
                                                    {{ $arsip -> ttd -> user -> nama }} ( {{ $arsip -> ttd -> user -> role -> nama }} )
                                                </td>
                                            </tr>

                                            <tr class=" fw-bold">
                                                <td>Lampiran</td>
                                            </tr>

                                        </table>
                                        <div class="text-center py-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="{{ route('export.surat', ['id' => $arsip -> id]) }}" class="stretched-link">{{ $arsip -> jenisSurat -> nama }}</a></h5>
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>                        
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
