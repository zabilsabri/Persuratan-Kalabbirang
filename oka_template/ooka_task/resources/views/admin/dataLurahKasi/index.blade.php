@extends('admin.layouts.app', ['title' => 'Data Lurah/Kasi'])
<link rel="stylesheet" href="{{ asset('style/css/verifikasiUser.css')}}">

@section('content')
    <div class="hal-head">
        <h1>Data Pegawai</h1>
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-left: 30px;margin-right: 30px;border-bottom-width: 0px;">
            <button class="nav-link active" id="nav-lurah-tab" data-bs-toggle="tab" data-bs-target="#nav-lurah" type="button" role="tab" aria-controls="nav-lurah" aria-selected="true">Lurah</button>
            <button class="nav-link" id="nav-kasi-tab" data-bs-toggle="tab" data-bs-target="#nav-kasi" type="button" role="tab" aria-controls="nav-kasi" aria-selected="false">Kasi</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-lurah" role="tabpanel" aria-labelledby="nav-lurah-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
                <table class="table" id="tableLurah">
                    <thead style="background-color: #CCFFDA;" >
                        <tr>
                            <th scope="col" style="width: 10px;">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="col">1</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">
                                    {{-- Detail --}}
                                    <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
                            <td scope="col">
                                {{-- Detail --}}
                                <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
                            <td scope="col">
                                {{-- Detail --}}
                                <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
                            <td scope="col" >
                                {{-- Detail --}}
                                <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
    <div class="tab-pane fade" id="nav-kasi" role="tabpanel" aria-labelledby="nav-kasi-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
                <table class="table" id="tableKasi">
                    <thead style="background-color: #CCFFDA;" >
                        <tr>
                            <th scope="col" style="width: 10px;">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="col">1</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">
                                    {{-- Detail --}}
                                    <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
                            <td scope="col">
                                {{-- Detail --}}
                                <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
                            <td scope="col">
                                {{-- Detail --}}
                                <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
                            <td scope="col" >
                                {{-- Detail --}}
                                <a href="{{ route('detail-lurah-kasi') }}" class="btn btn-warning">
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
    $("document").ready(function () {

      $("#tableKasi").dataTable();

      $("#tableLurah").dataTable();

    });
  </script>
@endsection
