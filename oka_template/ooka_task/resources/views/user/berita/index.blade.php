@extends('user.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/berita.css') }}">

    <div class="container-fluid  ">
        <div class="hero-slider  ">
            <div class="row ">
                <div class="col-md-9 my-3">

                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="detail_berita">
                                    <img src="{{ asset('style/img/news/img01.jpg') }}" class="d-block w-100" alt="...">
                                </a>

                                <div class="carousel-caption d-none d-md-block box text-dark text-md-start">
                                    <h3>Judul Berita</h3>
                                    <div class="d-flex justify-content-start">
                                        <p>
                                            <i class="ion ion-android-person pe-1 fs-3 "></i>
                                            Admin
                                            &emsp;
                                        </p>
                                        <p>
                                            <i class="ion ion-calendar pe-1 fs-3"></i>
                                            Senin, 12 Januari 2023
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                </div>
                            </div>

                            <div class="carousel-item active">
                                <img src="{{ asset('style/img/news/img08.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block box text-dark text-md-start">
                                    <h3>Judul Berita</h3>
                                    <div class="d-flex justify-content-start">
                                        <p>
                                            <i class="ion ion-android-person pe-1 fs-3 "></i>
                                            Admin
                                            &emsp;
                                        </p>
                                        <p>
                                            <i class="ion ion-calendar pe-1 fs-3"></i>
                                            Senin, 12 Januari 2023
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('style/img/news/img09.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block box text-dark text-md-start">
                                    <h3>Judul Berita</h3>
                                    <div class="d-flex justify-content-start">
                                        <p>
                                            <i class="ion ion-android-person pe-1 fs-3 "></i>
                                            Admin
                                            &emsp;
                                        </p>
                                        <p>
                                            <i class="ion ion-calendar pe-1 fs-3"></i>
                                            Senin, 12 Januari 2023
                                        </p>
                                    </div>
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                </div>
                            </div>



                        </div>

                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <div class="my-arrow arrow-prev">
                                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                            </div>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <div class="my-arrow arrow-next">
                                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                            </div>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>

                </div>

                <div class="col-md-3 col-4  ">
                    <div class="card my-3">
                        <img src="{{ asset('style/img/news/img09.jpg') }}" class="card-img-top" alt="...">
                        <div class=" sub-box">
                            <h5>Judul Berita</h5>
                            <div class="d-flex justify-content-start">
                                <p style="font-size: 10px; margin-bottom:0;">
                                    <b>

                                        <i class="ion ion-android-person pe-1 fs-6"></i>
                                        Admin
                                        &emsp;
                                        <i class="ion ion-calendar pe-1 fs-6"></i>
                                        Senin, 12 Januari 2023
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">
                        <img src="{{ asset('style/img/news/img09.jpg') }}" class="card-img-top" alt="...">
                        <div class=" sub-box">
                            <h5>Judul Berita</h5>
                            <div class="d-flex justify-content-start">
                                <p style="font-size: 10px; margin-bottom:0;">
                                    <b>
                                        <i class="ion ion-android-person pe-1 fs-6"></i>
                                        Admin
                                        &emsp;
                                        <i class="ion ion-calendar pe-1 fs-6"></i>
                                        Senin, 12 Januari 2023
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">
                        <img src="{{ asset('style/img/news/img09.jpg') }}" class="card-img-top" alt="...">
                        <div class=" sub-box">
                            <h5>Judul Berita</h5>
                            <div class="d-flex justify-content-start">
                                <p style="font-size: 10px; margin-bottom:0;">
                                    <b>

                                        <i class="ion ion-android-person pe-1 fs-6"></i>
                                        Admin
                                        &emsp;
                                        <i class="ion ion-calendar pe-1 fs-6"></i>
                                        Senin, 12 Januari 2023
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row pb-2">
            <div class="col-md-4">
                <div class="d-grid  ">
                    <span class="badge bg-success py-2 fs-5">Terbaru</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-grid  ">
                    <span class="badge bg-success py-2 fs-5">Populer</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-grid  ">
                    <div class="input-group">
                        <input class="form-control border-end-0 border" type="search" value="search"
                            id="example-search-input" placeholder="Cari di sini..">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                                type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-2">

            <div class="col-md-4">
                <div class="card my-3">
                    <img src="{{ asset('style/img/news/img09.jpg') }}" class="card-img-top" alt="...">
                    <div class=" sub-box">
                        <h5>Judul Berita</h5>
                        <div class="d-flex justify-content-start">
                            <p style="font-size: 14px; margin-bottom:0;">
                                <b>
                                    <i class="ion ion-android-person pe-1 fs-5"></i>
                                    Admin
                                    &emsp;
                                    <i class="ion ion-calendar pe-1 fs-5"></i>
                                    Senin, 12 Januari 2023
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card my-3">
                    <img src="{{ asset('style/img/news/img09.jpg') }}" class="card-img-top" alt="...">
                    <div class=" sub-box">
                        <h5>Judul Berita</h5>
                        <div class="d-flex justify-content-start">
                            <p style="font-size: 14px; margin-bottom:0;">
                                <b>
                                    <i class="ion ion-android-person pe-1 fs-5"></i>
                                    Admin
                                    &emsp;
                                    <i class="ion ion-calendar pe-1 fs-5"></i>
                                    Senin, 12 Januari 2023
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card my-3">
                    <img src="{{ asset('style/img/news/img09.jpg') }}" class="card-img-top" alt="...">
                    <div class=" sub-box">
                        <h5>Judul Berita</h5>
                        <div class="d-flex justify-content-start">
                            <p style="font-size: 14px; margin-bottom:0;">
                                <b>
                                    <i class="ion ion-android-person pe-1 fs-5"></i>
                                    Admin
                                    &emsp;
                                    <i class="ion ion-calendar pe-1 fs-5"></i>
                                    Senin, 12 Januari 2023
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
