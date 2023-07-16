@extends('user.layouts.app', ['title' => 'Notifikasi'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/notifikasi.css') }}">
    <div class="container-md  ">

        <div class="header">
            <h1 class="text-dark text-left  mt-4">
                <b>
                    Notifikasi
                </b>
            </h1>
        </div>

            <div class="row">

                <div class="col-md-6">
                @foreach($notifs as $notif)

                    @if($notif -> status == "Disetujui")
                    <div class="card btn btn-hover-success surat-box border border-success py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">{{ $notif -> created_at }}</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_check.svg') }}" width='100px' class="img-fluid px-3" alt="">
                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-success">Berhasil!</h5>
                                <p class="text-secondary fw-bold">{{ $notif -> keterangan }}</p>
                            </div>
                        </div>
                    </div>

                    @elseif($notif -> status == "Dalam Proses")
                    <div class="card btn btn-hover-warning surat-box border border-warning py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">{{ $notif -> created_at }}</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_doc.svg') }}" width='100px' class="img-fluid px-3" alt="">

                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-warning">Dalam Proses!</h5>
                                <h6 class="text-warning">No: {{ $notif -> suratKeluar -> no_surat }}</h6>
                                <p class="text-secondary fw-bold">{{ $notif -> keterangan }}</p>
                            </div>
                        </div>
                    </div>

                    @elseif($notif -> status == "Selesai")
                    <div class="card btn btn-hover-primary surat-box border border-primary py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">{{ $notif -> created_at }}</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_doc_check.svg') }}" width='100px' class="img-fluid px-3" alt="">

                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-primary">Disetujui</h5>
                                <h6 class="text-primary">No: {{ $notif -> suratKeluar -> no_surat }}</h6>
                                <p class="text-secondary fw-bold">{{ $notif -> keterangan }}</p>
                            </div>
                        </div>
                    </div>

                    @elseif($notif -> status == "Ditolak")
                    <div class="card btn btn-hover-danger surat-box border border-danger py-0 mt-2">
                        <p class=" position-absolute top-0 end-0 pt-2 px-3 text-secondary">{{ $notif -> created_at }}</p>
                        <div class="d-flex justify-content-start ">
                            <img src="{{ asset('image/icon/ic_doc_empty.svg') }}" width='100px' class="img-fluid px-3" alt="">

                            <div class="px-2 text-start ">
                                <h5 class="pt-2 text-danger">Ditolak</h5>
                                <p class="text-secondary fw-bold">{{ $notif -> keterangan }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="text-center">
                        {{ $notifs->links() }}
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="text-center">
                        <img src="{{ asset('image/notif-kosong.png') }}" class="img-fluid mx-3" alt="">
                    </div>
                    <div class="text-center ">
                        <h3 class="text-success fw-bold">Selamat Datang di Notifikasi</h3>
                    </div>
                </div>
            </div>
    </div>
@endsection
