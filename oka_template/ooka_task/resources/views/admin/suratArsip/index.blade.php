@extends('admin.layouts.app', ['title' => 'Surat Arsip'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Surat Arsip </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row" style="justify-content: center;">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                    <div class="card-body" style="margin-top: 0px; color:white; background-color:#4FB96E; border-radius: 7px;">
                        <h5 class="card-title">Surat Masuk</h5>
                        <p class="card-text">{{ $jumlah_arsip_masuk }}</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                    <div class="card-body" style="margin-top: 0px; color: #4FB96E; background-color:#FFFFFF; border-radius: 7px; border: 2px solid #4FB96E;">
                        <h5 class="card-title">Surat Keluar</h5>
                        <p class="card-text">{{ $jumlah_arsip_keluar }}</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-left: 30px;margin-right: 30px;border-bottom-width: 0px;">
            <button class="nav-link active" id="nav-arsipMasuk-tab" data-bs-toggle="tab" data-bs-target="#nav-arsipMasuk" type="button" role="tab" aria-controls="nav-arsipMasuk" aria-selected="true">Arsip Masuk</button>
            <button class="nav-link" id="nav-arsipKeluar-tab" data-bs-toggle="tab" data-bs-target="#nav-arsipKeluar" type="button" role="tab" aria-controls="nav-arsipKeluar" aria-selected="false">Arsip Keluar</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-arsipMasuk" role="tabpanel" aria-labelledby="nav-arsipMasuk-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
                <table class="table" id="tableMasuk">
                    <thead style="background-color: #CCFFDA;" >
                        <tr>
                            <th scope="col" style="width: 10px;">No</th>
                            <th scope="col">Judul Surat</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arsipMasuks as $index => $arsipMasuk)
                            <tr>
                                <td scope="col">{{ $index + 1 }}</td>
                                <td scope="col">{{ $arsipMasuk -> suratMasuk -> judul_surat }}</td>
                                <td scope="col">{{ $arsipMasuk -> suratMasuk -> asal_surat }}</td>
                                <td scope="col">{{ $arsipMasuk -> suratMasuk -> created_at }}</td>
                                <td scope="col">
                                    {{-- Detail --}}
                                    <a href="{{ route('surat-arsip-admin.detailMasuk', [$arsipMasuk -> id]) }}" class="btn btn-warning">
                                        <i class="ion ion-information"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-arsipKeluar" role="tabpanel" aria-labelledby="nav-arsipKeluar-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
                <table class="table" id="tableKeluar">
                    <thead style="background-color: #CCFFDA;" >
                        <tr>
                            <th scope="col" style="width: 10px;">No</th>
                            <th scope="col">Judul Surat</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arsipKeluars as $index => $arsipKeluar)
                            <tr>
                                <td scope="col">{{ $index + 1 }}</td>
                                <td scope="col">{{ $arsipKeluar -> suratKeluar -> jenisSurat -> nama }}</td>
                                <td scope="col">{{ $arsipKeluar -> suratKeluar -> user -> nama }}</td>
                                <td scope="col">{{ $arsipKeluar -> suratKeluar -> tgl_surat }}</td>
                                <td scope="col">
                                    {{-- Detail --}}
                                    <a href="{{ route('surat-arsip-admin.detailKeluar', [$arsipKeluar -> id]) }}" class="btn btn-warning">
                                        <i class="ion ion-information"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    $(document).ready( function () {
            $('#tableMasuk').DataTable();
            $('#tableKeluar').DataTable();
        } );
    </script>
@endsection
