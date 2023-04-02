@extends('kasi.layouts.app', ['title' => 'Surat Arsip'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Surat Arsip </h1>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="row" style="justify-content: center;">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card">
                        <div class="card-body" style="margin-top: 0px; color:white; background-color:#4FB96E; border-radius: 7px;">
                            <h5 class="card-title">Surat Masuk</h5>
                            <p class="card-text">30</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body" style="margin-top: 0px; color: #4FB96E; background-color:#FFFFFF; border-radius: 7px; border: 2px solid #4FB96E;">
                            <h5 class="card-title">Surat Keluar</h5>
                            <p class="card-text">50</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card p-4">
                    <!-- Set up the datatable -->
                    <table class="table" id="tableSuratArsip">
                        <thead style="background-color: #CCFFDA;">
                            <tr>
                                <th scope="col" style="width: 10px;">No</th>
                                <th scope="col">Judul Surat</th>
                                <th scope="col">Nama Pengirim</th>
                                <th scope="col">Tgl Masuk</th>
                                <th scope="col">Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col">Hip Hop</td>
                                    <td scope="col">Hip Hop</td>
                                    <td scope="col">Hip Hop</td>
                                    <td scope="col"><a href="#">Lorem Ipsum Dolor</a></td>
                                </tr>
                            <tr>
                                <td scope="col">2</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col"><a href="#">Lorem Ipsum Dolor</a></td>
                            </tr>
                            <tr>
                                <td scope="col">3</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col"><a href="#">Lorem Ipsum Dolor</a></td>
                            </tr>
                            <tr>
                                <td scope="col">4</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col"><a href="#">Lorem Ipsum Dolor</a></td>
                            </tr>
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>

    </div>

    <script>
    $(document).ready( function () {
            $('#tableSuratArsip').DataTable();
        } );
    </script>
@endsection
