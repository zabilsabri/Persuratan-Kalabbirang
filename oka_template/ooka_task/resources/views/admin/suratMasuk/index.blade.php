@extends('admin.layouts.app', ['title' => 'Surat Masuk'])

@section('content')
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
        <strong> {{$message}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Surat Masuk </h1>
            </div>
            <div class="flex-shrink-0 mt-3">
                <a href="{{ route ('surat-masuk.input') }}">
                <svg width="83" height="83" viewBox="0 0 83 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_1067_4192)">
                        <circle cx="41.5" cy="37.5" r="37.5" fill="#4FB96E"/>
                        <circle cx="41.5" cy="37.5" r="37.25" stroke="#CCCCCC" stroke-width="0.5"/>
                    </g>
                    <path d="M54.3725 29.9001C54.9209 29.3517 54.9209 28.4376 54.3725 27.9173L51.0818 24.6267C50.5615 24.0782 49.6475 24.0782 49.099 24.6267L46.5115 27.2001L51.785 32.4735M29.4678 44.2579V49.5313H34.7412L50.2943 33.9642L45.0209 28.6907L29.4678 44.2579Z" fill="white"/>
                    <defs>
                        <filter id="filter0_d_1067_4192" x="0" y="0" width="83" height="83" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1067_4192"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1067_4192" result="shape"/>
                        </filter>
                    </defs>
                </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <!-- Set up the datatable -->
                    <table class="table" id="tableSuratMasuk">
                        <thead style="background-color: #CCFFDA;">
                            <tr>
                                <th scope="col" style="width: 10px;">No</th>
                                <th scope="col">Judul Surat</th>
                                <th scope="col">Nama Pengirim</th>
                                <th scope="col">Tgl Masuk</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($surats as $index => $surat)
                                <tr>
                                    <td scope="col">{{ $index + 1 }}</td>
                                    <td scope="col">{{ $surat -> judul_surat }}</td>
                                    <td scope="col">{{ $surat -> asal_surat }}</td>
                                    <td scope="col">{{ $surat -> created_at }}</td>
                                    <td scope="col"><a class="btn btn-success" href="{{ route('surat-masuk-admin.detail', [$surat -> id]) }}" role="button">Open</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready( function () {
            $('#tableSuratMasuk').DataTable();
        } );
    </script>
@endsection
