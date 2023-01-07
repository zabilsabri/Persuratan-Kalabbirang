@extends('user.layouts.app', ['title' => 'Arsip Surat Kosong'])

@section('content')
    <div class="container-md  py-4">

        <div class="header">
            <h1 class="text-dark text-center">
                <b>
                    Pengarsipan Surat
                </b>
            </h1>
        </div>

        <div class="hero pt-3 text-center">
            <img src="{{ asset('image/not-found.png') }}" class="img-fluid" alt="...">
        </div>

        <div class="body pt-4 ">
            <h2 class="fw-bold text-center text-success fs-5 " style="text-align: justify;">
               Tidak ada Surat yang Diarsipkan
            </h2>
        </div>

    </div>
@endsection
