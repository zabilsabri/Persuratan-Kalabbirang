@extends('admin.layouts.app', ['title' => 'Berita'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Berita </h1>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card px-4 pb-4">
                    <div class=" text-right px-4 pt-4 mb-4">
                        <a href="{{ route('berita-admin.tambah') }}" class="btn text-white btn-success">
                            <i class="ion ion-plus"></i> Tambah Berita
                        </a>
                    </div>
                    <!-- Set up the datatable -->
                    <table class="table" id="tableBerita">
                        <thead style="background-color: #CCFFDA;">
                            <tr>
                                <th scope="col" style="width: 10px;">No</th>
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Sumber</th>
                                <th scope="col">Tgl Publikasi</th>
                                <th scope="col" style="width: 100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col">Hip Hop</td>
                                    <td scope="col">Hip Hop</td>
                                    <td scope="col">Hip Hop</td>
                                    <td>
                                        {{-- Detail --}}
                                        <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
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
                            <tr>
                                <td scope="col">2</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td>
                                    {{-- Detail --}}
                                    <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
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
                            <tr>
                                <td scope="col">3</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td>
                                    {{-- Detail --}}
                                    <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
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
                            <tr>
                                <td scope="col">4</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">Jazz</td>
                                <td>
                                    {{-- Detail --}}
                                    <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
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
            </div>
        </div>
    </div>

    <script>
    $(document).ready( function () {
            $('#tableBerita').DataTable();
        } );
    </script>
@endsection
