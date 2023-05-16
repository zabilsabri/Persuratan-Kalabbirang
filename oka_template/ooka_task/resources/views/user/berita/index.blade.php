@extends('user.layouts.app', ['title' => 'Berita'])
@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/berita.css') }}">

    <div class="container-fluid  ">
        <div class="hero-slider  ">
            <div class="row px-5 pt-5">
                <div class="col-md-9 my-3">

                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($beritas_carousel as $berita_carousel)
                            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                <a href="detail_berita">
                                    <img src="{{ asset('temp_file/berita/'.$berita_carousel->gambar) }}" height="600px" class="d-block w-100" alt="...">
                                </a>

                                <div class="carousel-caption d-none d-md-block box text-md-start">
                                    <div class="content-details text-dark bg-light rounded p-2">
                                    <h3>{{ $berita_carousel -> judul }}</h3>
                                    <div class="d-flex justify-content-start">
                                        <p>
                                            <i class="ion ion-android-person pe-1 fs-3 "></i>
                                            {{ $berita_carousel -> judul }}
                                            &emsp;
                                        </p>
                                        <p>
                                            <i class="ion ion-calendar pe-1 fs-3"></i>
                                            {{ $berita_carousel -> tgl_berita }}
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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

                <div class="col-md-3 col-4">
                    @foreach($beritas_carousel as $berita_carousel2)
                    <div class="card my-3">
                        <img src="{{ asset('temp_file/berita/'.$berita_carousel2->gambar) }}" height="190px" class="card-img-top" alt="...">
                        <div class=" sub-box text-dark bg-light rounded p-2">
                            <h5>{{ $berita_carousel2 -> judul }}</h5>
                            <div class="d-flex justify-content-start">
                                <p style="font-size: 10px; margin-bottom:0;">
                                    <b>
                                        <i class="ion ion-android-person pe-1 fs-6"></i>
                                        {{ $berita_carousel2 -> judul }}
                                        &emsp;
                                        <i class="ion ion-calendar pe-1 fs-6"></i>
                                        {{ $berita_carousel2 -> tgl_berita }}
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="row px-5">
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
                    <span class="badge bg-success py-2 fs-5">Terkini</span>
                </div>
            </div>
        </div>

        <div class="row pb-2 m-5">
        @foreach($beritas_all as $berita_all)
            <div class="col-md-4">
                <div class="card my-2">
                    <img src="{{ asset('temp_file/berita/'. $berita_all -> gambar) }}" height="250px" class="card-img-top" alt="...">
                    <div class=" sub-box text-dark bg-light rounded p-2">
                        <h5>{{ $berita_all -> judul }}</h5>
                        <div class="d-flex justify-content-start">
                            <p style="font-size: 14px; margin-bottom:0;">
                                <b>
                                    <i class="ion ion-android-person pe-1 fs-5"></i>
                                    {{ $berita_all -> penulis }}
                                    &emsp;
                                    <i class="ion ion-calendar pe-1 fs-5"></i>
                                    {{ $berita_all -> tgl_berita }}
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="pagination justify-content-center">
        {{ $beritas_all->links() }}
        </div>
    </div>
@endsection
