@extends('user.layouts.app', ['title' => 'Dokumen Saya'])

@section('content')
    <div class="container-md  py-4">

        <div class="header">
            <h1 class="text-dark text-center">
                <b>
                    Dokumen Saya
                </b>
            </h1>
        </div>

        <div class="row mt-5 justify-content-evenly px-5">
            @foreach($pengantar as $index => $pengantars)
            <div class="col-md-5">

                <div class="card mt-md-0 mt-4">
                    <div class="card-body">
                        <h3 class=" text-success fw-bold"><b> {{ $pengantars -> file_surat }} </b></h3>
                        <img src="{{ asset('image/dump.png') }}" class="img-fluid p-3" alt="...">

                        <div class="d-flex justify-content-between px-2">
                            <a href="#" class="text-danger text-decoration-none d-flex align-items-center"">
                                <i class="ion ion-trash-a fs-4 pe-3"></i>
                                <h6 class="pt-1"> Hapus file </h6>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>


    </div>
@endsection
