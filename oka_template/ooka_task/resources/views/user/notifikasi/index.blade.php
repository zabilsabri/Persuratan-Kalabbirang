@extends('user.layouts.app', ['title' => 'Notifikasi'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/notifikasi.css') }}">
    <div class="container-md  ">

        <div class="header">
            <h1 class="text-dark text-left  mt-4">
                <b>
                    Pengarsipan Surat
                </b>
            </h1>
        </div>

        @if ($view == true)
            <div class="row   ">
                <div class="col-md-6">

                    <div class="card btn btn-hover-success surat-box border border-success py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">20 Desember 2022</p>
                        <div class="d-flex justify-content-start ">
                            {{-- <i class="ion ion-checkmark text-success px-3 pt-3" style="font-size: 50px;"></i> --}}
                            <img src="{{ asset('image/icon/ic_check.svg') }}" class="img-fluid px-3" alt="">
                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-success">Nomor Surat</h5>
                                <p class="text-secondary fw-bold">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Repellat, maxime!</p>
                            </div>
                        </div>
                    </div>

                    <div class="card btn btn-hover-warning surat-box border border-warning py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">20 Desember 2022</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_doc.svg') }}" class="img-fluid px-3" alt="">

                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-warning">Dalam Proses</h5>
                                <p class="text-secondary fw-bold">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Repellat, maxime!</p>
                            </div>
                        </div>
                    </div>

                    <div class="card btn btn-hover-primary surat-box border border-primary py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">20 Desember 2022</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_doc_check.svg') }}" class="img-fluid px-3" alt="">

                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-primary">Dalam Proses</h5>
                                <p class="text-secondary fw-bold">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Repellat, maxime!</p>
                            </div>
                        </div>
                    </div>

                    <div class="card btn btn-hover-danger surat-box border border-danger py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">20 Desember 2022</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_doc_empty.svg') }}" class="img-fluid px-3" alt="">

                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-danger">Dalam Proses</h5>
                                <p class="text-secondary fw-bold">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Repellat, maxime!</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 ">
                    @if ($has_klik == true)
                        <div class="text-success d-flex justify-content-start">
                            <img src="{{ asset('image/icon/ic_check.svg') }}" class="img-fluid px-3" alt="">
                            <h2> Selesai </h2>
                        </div>
                        <div class="text-left px-3 mt-3">
                            <h3 class="text-dark fw-bold">Pembuatan KTP / Perpanjangan KTP / Mengurus KTP Hilang</h3>
                            <p class="text-secondary">20 Desember 2022</p>
                            <p class="text-secondary mt-3">Surat Pengantar Pembuatan KTP telah selesai diproses. Bapak/Ibu
                                dapat menuju halaman Riwayat untuk info lebih lanjut. </p>
                            <p class="text-secondary">Terimakasih <br> Kallabirang Admin</p>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-success px-5 py-2 fw-bold mt-5">Lihat Riwayat</a>
                        </div>
                    @else
                        <div class="text-center">
                            <img src="{{ asset('image/notif-kosong.png') }}" class="img-fluid mx-3   " alt="">
                        </div>
                        <div class="text-center ">
                            <h3 class="text-success fw-bold">Selamat Datang di Notifikasi</h3>
                            <h4 class="text-secondary">Silahkan pilih pesan yang ingin dibaca</h4>
                        </div>
                    @endif
                </div>


            </div>
        @else
            <div class="hero pt-0 text-center">
                <img src="{{ asset('image/notif-kosong.png') }}" class="img-fluid" alt="...">
            </div>

            <div class="body pt-3 ">
                <h2 class="fw-bold text-center text-success fs-5 " style="text-align: justify;">
                    Tidak Ada Notifikasi
                </h2>
            </div>
        @endif



    </div>
@endsection
