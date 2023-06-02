@extends('user.layouts.app', ['title' => 'Detail Berita'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/berita.css') }}">

    @foreach($beritas as $berita)
    <div class="container-md  py-4">

        <div class="header">
            <h1 class="text-success ">
                <b>
                    {{ $berita -> judul }}
                </b>
            </h1>

            <div class="d-flex justify-content-start text-success">
                <h6>
                    <i class="ion ion-android-person pe-1 fs-2 text-secondary "></i>
                    {{ $berita -> penulis }}
                    &emsp;
                </h6>
                <h6>
                    <i class="ion ion-calendar pe-1 fs-2 text-secondary"></i>
                    {{ $berita -> tgl_berita }}
                </h6>
            </div>
        </div>

        <div class="hero pt-3">
            <img src="{{ asset('temp_file/berita/'. $berita -> gambar ) }}" class="mx-auto d-block w-75" alt="Gambar Berita">
        </div>

        <div class="body p-2 pt-3">
            <p class="fw-bold text-break fs-5 " style="text-align: justify;">
               &emsp; {{ $berita -> deskripsi }}
            </p>
        </div>

    </div>
    @endforeach
@endsection
