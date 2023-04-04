@extends('user.layouts.app', ['title' => 'Riwayat'])
@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/riwayat.css') }}">
    <div class="content">
        <h3 class="content-title">Pengajuan Surat</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mx-5">
            @foreach($surats as $surat)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-no">No: {{ $surat -> no_surat }}</p>
                        <p class="card-date"> {{ $surat -> tgl_surat }} </p>
                        <h5 class="card-title">{{ $surat -> jenisSurat -> nama }}</h5>
                        <div class="stepper-wrapper">
                            <div class="stepper-item {{ $surat->process == '1' || $surat->process == '2' || $surat->process == '3' ? 'completed' : '' }}">
                                <div class="step-counter">1</div>
                                <div class="step-name">Pengajuan Diterima</div>
                            </div>
                            <div class="stepper-item {{ $surat->process == '2' || $surat->process == '3' ? 'completed' : '' }}">
                                <div class="step-counter">2</div>
                                <div class="step-name">Pending</div>
                            </div>
                            <div class="stepper-item {{ $surat->process == '3' ? 'completed' : '' }}">
                                <div class="step-counter">3</div>
                                <div class="step-name">Selesai</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
