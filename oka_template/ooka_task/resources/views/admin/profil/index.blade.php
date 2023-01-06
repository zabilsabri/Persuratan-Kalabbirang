@extends('admin.layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb mr-3">
            <div class="breadcrumb-item active"><a href="#">Home</a></div>
            <div class="breadcrumb-item"><a href="#">Profil</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6  col-12">
            <div class="card-body">
                <figure class="avatar mr-2 avatar-xxl">
                    <img src="{{ asset('style/img/avatar/avatar-1.png') }}" alt="...">
                    <a href="#" class="my-box">
                        <i class=" ion ion-edit ic" style="font-size: 50px; color: #000;"> </i>
                    </a>
                </figure>
                <div class="text-center mt-3">

                    <h2 style="color:#4FB96E ;">Ini nama saya</h2>
                    <h5>admin@gmail.com</h5>
                </div>

            </div>
        </div>
        <div class="col-md-6  col-12 mt-5 ">
            <h4 style="color:#4FB96E ;">Pengaturan</h4>
            <div class="card ">
                <div class="card-header d-flex justify-content-between">

                    <a href="#" class="btn btn-icon icon-left"><i style="color:#4FB96E; font-size: 30px;"
                            class="ion ion-android-person"></i> <b>Data Pribadi</b></a>
                    <i class="ion ion-chevron-right"> </i>
                </div>
            </div>
            <div class="text-center" style="margin-top:130px;">

                <a href="#" class="btn btn-outline-success px-5 py-2 bg-white">
                    KELUAR
                </a>
            </div>
        </div>
    </div>
@endsection
