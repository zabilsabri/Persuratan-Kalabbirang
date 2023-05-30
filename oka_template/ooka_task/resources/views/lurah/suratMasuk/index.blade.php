@extends('lurah.layouts.app', ['title' => 'Surat Masuk'])

@section('content')
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
        <strong> {{$message}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-5"> Surat Masuk </h1>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-left: 30px;margin-right: 30px;border-bottom-width: 0px;">
            <button class="nav-link active" id="nav-arsipMasuk-tab" data-bs-toggle="tab" data-bs-target="#nav-arsipMasuk" type="button" role="tab" aria-controls="nav-arsipMasuk" aria-selected="true">Surat Masuk</button>
            <button class="nav-link" id="nav-arsipKeluar-tab" data-bs-toggle="tab" data-bs-target="#nav-arsipKeluar" type="button" role="tab" aria-controls="nav-arsipKeluar" aria-selected="false">Surat Keluar</button>
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
                            <th scope="col">Penanggung Jawab</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($surat_masuks as $index => $surat_masuk)
                            <tr>
                                <td scope="col">{{ $index + 1 }}</td>
                                <td scope="col">{{ $surat_masuk -> judul_surat }}</td>
                                <td scope="col">{{ $surat_masuk -> asal_surat }}</td>
                                <td scope="col">{{ $surat_masuk -> tgl_surat }}</td>
                                <td scope="col">{{ $surat_masuk -> user -> nama }} ({{ $surat_masuk -> user -> role -> nama }})</td>
                                <td scope="col"><a class="btn btn-success" href="{{ route('surat-masuk-lurah.detail', [$surat_masuk -> id]) }}" role="button">Open</a></td>
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
                            <th scope="col">Penanggung Jawab</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($surats as $index => $surat)
                            <tr>
                                <td scope="col">{{ $index + 1 }}</td>
                                <td scope="col">{{ $surat -> jenisSurat -> nama }}</td>
                                <td scope="col">{{ $surat -> user -> nama }}</td>
                                <td scope="col">{{ $surat -> created_at }}</td>
                                <td scope="col">{{ $surat -> pj -> nama }} ({{ $surat -> pj -> role -> nama }})</td>
                                <td scope="col"><a class="btn btn-success" href="{{ route('surat-keluar-lurah.detail', [$surat -> id]) }}" role="button">Open</a></td>
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
