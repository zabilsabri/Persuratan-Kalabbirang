@extends('admin.layouts.app', ['title' => 'Dashboard - Admin'])

@section('content')
    <div class="section-header">
        <h1>Selamat Datang, Admin ! </h1>
        <div class="section-header-breadcrumb mr-3">
            <div class="breadcrumb-item active"><a href="#" class="breadcrump-dashboard">Home</a></div>
            <div class="breadcrumb-item"><a href="#" class="breadcrump-dashboard">Admin</a></div>
        </div>
    </div>
    <div class="row ms-2 me-2">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>User Terdaftar</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>User Terverifikasi</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>Surat Masuk</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>Surat Keluar</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="section-body ms-3 me-3">
        <div class="row">

            <div class="col-12 col-md-8 col-lg-8">
                <div class="card" style="background-color: transparent; box-shadow: none;">
                    <div class="card-header" style="border-bottom-color: transparent;">
                        <h3 class="text-success">Data Kunjungan Website</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart4"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="card" style="background-color: transparent; box-shadow: none;">
                    <div class="card-header" style="border-bottom-color: transparent;">
                        <h4 class="text-success">3 Warga Terbaru Membuat Akun</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                           <li class="list-group list-group-flush mb-3">
                               <div class="d-flex align-items-center">
                                   <figure class="avatar mr-2 avatar-lg">
                                       <img src="{{ asset('style/img/avatar/avatar-1.png') }}" alt="...">
                                   </figure>
                                   <h5 class="mx-3">Santoso</h5>
                               </div>
                           </li>
                           <li class="list-group list-group-flush mb-3">
                               <div class="d-flex align-items-center">
                                   <figure class="avatar mr-2 avatar-lg">
                                       <img src="{{ asset('style/img/avatar/avatar-1.png') }}" alt="...">
                                   </figure>
                                   <h5 class="mx-3">Santoso</h5>
                               </div>
                           </li>
                           <li class="list-group list-group-flush mb-3">
                               <div class="d-flex align-items-center">
                                   <figure class="avatar mr-2 avatar-lg">
                                       <img src="{{ asset('style/img/avatar/avatar-1.png') }}" alt="...">
                                   </figure>
                                   <h5 class="mx-3">Santoso</h5>
                               </div>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
