@extends('user.layouts.app', ['title' => 'Berita'])
@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/berita.css') }}">

    <div class="container">
        <div class="hero-slider  ">
            <div class="row pt-5 px-2">
                <div class="col-sm-9 my-3">

                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($beritas_carousel as $berita_carousel)
                            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                <a href="#">
                                    <img src="{{ asset('temp_file/berita/'.$berita_carousel->gambar) }}" class="d-block w-100" alt="gambar-caruosel">
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

                <div class="col-sm-3">
                    <h4>Berita Terbaru</h4>
                    @foreach($beritas_carousel as $berita_carousel2)
                    <div class="card my-3">
                        <a href="{{ route('detail.berita', [$berita_carousel2 -> id]) }}">
                            <img src="{{ asset('temp_file/berita/'.$berita_carousel2->gambar) }}" height="190px" class="img-fluid card-img-top" alt="...">
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
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>

        <hr>

        <div class="row pb-2 m-3">
            <h4>Semua Berita</h4>
        @foreach($beritas_all as $berita_all)
            <div class="col-md-4">
                <div class="card my-2">
                    <a href="{{ route('detail.berita', [$berita_all -> id]) }}">
                        <img src="{{ asset('temp_file/berita/'. $berita_all -> gambar) }}" height="auto" class="card-img-top" alt="...">
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
                    </a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="pagination justify-content-center">
        {{ $beritas_all->links() }}
        </div>
    </div>
@endsection
