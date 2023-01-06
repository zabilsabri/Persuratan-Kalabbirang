@extends('user.layouts.app1')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="hero-slider " style="margin: 10px 0 0 0 ">

                <div class="slider-item  hero-area "
                    style="background-image: url({{ asset('user-style/images/slider/slider-1.jpg') }});  ">
                    <div class="container">
                        <div class="row my-box">
                            <div class="col-lg-8 text-left keterangan" style="color: #fff;">
                                <h1 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                                    data-delay-in=".1"> <b> Judul Berita </b></h1>
                                <div style="display: flex;">
                                    <h4 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                            class="ion ion-android-person"></i> Admin &emsp;</h4>
                                    <h4 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                            class="ion ion-calendar"></i> Senin, 20 Januari 2090</h4>
                                </div>
                                <h5 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor
                                    sit amet consectetur.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item  hero-area "
                    style="background-image: url({{ asset('user-style/images/slider/slider-2.jpg') }}); ">
                    <div class="container">
                        <div class="row my-box">
                            <div class="col-lg-8 text-left keterangan" style="color: #fff;">
                                <h1 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                                    data-delay-in=".1"> <b> Judul Berita </b></h1>
                                <div style="display: flex;">
                                    <h4 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                            class="ion ion-android-person"></i> Admin &emsp;</h4>
                                    <h4 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                            class="ion ion-calendar"></i> Senin, 20 Januari 2090</h4>
                                </div>
                                <h5 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor
                                    sit amet consectetur.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item  hero-area "
                    style="background-image: url({{ asset('user-style/images/slider/slider-3.jpg') }}); ">
                    <div class="container">
                        <div class="row my-box">
                            <div class="col-lg-8 text-left keterangan" style="color: #fff;">
                                <h1 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                                    data-delay-in=".1"> <b> Judul Berita </b></h1>
                                <div style="display: flex;">
                                    <h4 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                            class="ion ion-android-person"></i> Admin &emsp;</h4>
                                    <h4 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                            class="ion ion-calendar"></i> Senin, 20 Januari 2090</h4>
                                </div>
                                <h5 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor
                                    sit amet consectetur.</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3" style="margin: 10px 0 0 0">

            <!-- Widget Latest Posts -->
            <div class="widget widget-latest-post" style="color:#fff;">
                <div class="media">
                    <a class="" href="#!">
                        <img class="media-object" src="{{ asset('user-style/images/blog/post-thumb.jpg') }}"
                            alt="Image" />
                    </a>
                    <div class="content">
                        <h5 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                            data-delay-in=".1"> <b> Judul Berita </b></h5>
                        <div style="display: flex;">
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-android-person"></i> Admin &emsp;</h6>
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-calendar"></i> Senin, 20 Januari 2090</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-latest-post" style="color:#fff;">
                <div class="media">
                    <a class="" href="#!">
                        <img class="media-object" src="{{ asset('user-style/images/blog/post-thumb.jpg') }}"
                            alt="Image" />
                    </a>
                    <div class="content">
                        <h5 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                            data-delay-in=".1"> <b> Judul Berita </b></h5>
                        <div style="display: flex;">
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-android-person"></i> Admin &emsp;</h6>
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-calendar"></i> Senin, 20 Januari 2090</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-latest-post" style="color:#fff;">
                <div class="media">
                    <a class="" href="#!">
                        <img class="media-object" src="{{ asset('user-style/images/blog/post-thumb.jpg') }}"
                            alt="Image" />
                    </a>
                    <div class="content">
                        <h5 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                            data-delay-in=".1"> <b> Judul Berita </b></h5>
                        <div style="display: flex;">
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-android-person"></i> Admin &emsp;</h6>
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-calendar"></i> Senin, 20 Januari 2090</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Latest Posts -->
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">

            <div class="widget widget-subscription">
                <a type="submit" class="btn btn-main">
                    Terbaru
                </a>
            </div>



        </div>

        <div class="col-md-4">
            <div class="widget widget-subscription">
                <a type="submit" class="btn btn-main">
                    Populer
                </a>
            </div>

        </div>

        <div class="col-md-4 ">
            <div class="form-group has-feedback" style="margin-top: 5px;">
                <input type="text" class="form-control" id="inputSuccess2" placeholder="Cari di sini.." />
                <span class="ion ion-search form-control-feedback" style="font-size: 30px; padding: 7px 10px 0 0;"></span>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="widget widget-latest-post" style="color:#fff;">
                <div class="media">
                    <a class="" href="#!">
                        <img class="my-media-product" src="{{ asset('user-style/images/blog/post-thumb.jpg') }}"
                            alt="Image" />
                    </a>
                    <div class="content">
                        <h5 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                            data-delay-in=".1"> <b> Judul Berita </b></h5>
                        <div style="display: flex;">
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-android-person"></i> Admin &emsp;</h6>
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-calendar"></i> Senin, 20 Januari 2090</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="widget widget-latest-post" style="color:#fff;">
                <div class="media">
                    <a class="" href="#!">
                        <img class="my-media-product" src="{{ asset('user-style/images/blog/post-thumb.jpg') }}"
                            alt="Image" />
                    </a>
                    <div class="content">
                        <h5 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                            data-delay-in=".1"> <b> Judul Berita </b></h5>
                        <div style="display: flex;">
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-android-person"></i> Admin &emsp;</h6>
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-calendar"></i> Senin, 20 Januari 2090</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="widget widget-latest-post" style="color:#fff;">
                <div class="media">
                    <a class="" href="#!">
                        <img class="my-media-product" src="{{ asset('user-style/images/blog/post-thumb.jpg') }}"
                            alt="Image" />
                    </a>
                    <div class="content">
                        <h5 style="margin-bottom: -5px;" data-duration-in=".3" data-animation-in="fadeInUp"
                            data-delay-in=".1"> <b> Judul Berita </b></h5>
                        <div style="display: flex;">
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-android-person"></i> Admin &emsp;</h6>
                            <h6 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><i
                                    class="ion ion-calendar"></i> Senin, 20 Januari 2090</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
