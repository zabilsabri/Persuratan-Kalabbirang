@extends('kasi.layouts.app', ['title' => 'Dashboard - Kasi'])

@section('content')
    <div class="section-header">
        <h1>Selamat Datang, Kasi ! </h1>
        <div class="section-header-breadcrumb mr-3">
            <div class="breadcrumb-item active"><a href="#" class="breadcrump-dashboard">Home</a></div>
            <div class="breadcrumb-item"><a href="#" class="breadcrump-dashboard">Kasi</a></div>
        </div>
    </div>
    <div class="row">
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

            <div class="col-12 col-md-8 col-lg-7">
                <div class="card" style="background-color: transparent; box-shadow: none;">
                    <div class="card-header" style="border-bottom-color: transparent;">
                        <h3 class="text-success">Data Kunjungan Website</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart4"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-5">
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

    <hr class="mb-0">
    <div class="berita-section">
        <div class="berita-title">
            <p class="berita-section-title"> Berita </p>
        </div>
        <div class="berita-body mt-4 mb-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="container-berita">
                        <img src="{{asset('image/berita1.png')}}" class="p-auto" alt="Snow" style="width:100%; height:217px">
                        <div class="bottom-left">
                            <p class="berita-img" >
                                <span class="judul-berita-img" > Judul berita </span> <br> Lorem Ipsum Dolor sit Amet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-berita">
                        <img src="{{asset('image/berita2.png')}}" alt="Snow" class="p-auto" style="width:100%; height:217px">
                        <div class="bottom-left">
                        <p class="berita-img" >
                            <span class="judul-berita-img" > Judul berita </span> <br> Lorem Ipsum Dolor sit Amet
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-berita">
                        <img src="{{asset('image/berita3.png')}}" alt="Snow" class="p-auto" style="width:100%; height:217px">
                        <div class="bottom-left">
                        <p class="berita-img" >
                            <span class="judul-berita-img" > Judul berita </span> <br> Lorem Ipsum Dolor sit Amet
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
