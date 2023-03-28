@extends('admin.layouts.app', ['title' => 'Admin Berita - Detail'])

@section('content')
    <div class="section-header">
        <h1> Detail Berita</h1>
    </div>

    <link rel="stylesheet" href="{{ asset('style/css/berita.css') }}">
    <div class="card">

       <div class="container-md  py-4">
            @foreach($beritas as $berita)
           <div class="header">
               <h1 class="text-success text-center">
                   <b>
                       {{ $berita -> judul }}
                   </b>
               </h1>

               <div class="d-flex justify-content-start text-success">
                   <h6>
                       <i class="ion ion-location pe-3 fs-2 text-secondary "></i>
                       {{ $berita -> tempat_kejadian }}
                       &emsp;
                   </h6>
                   <h6>
                       <i class="ion ion-calendar pe-1 fs-2 text-secondary"></i>
                       {{ $berita -> tgl_berita }}
                   </h6>
               </div>
           </div>
   
           <div class="hero pt-3">
               <img src="{{ asset('temp_file/berita/'. $berita -> gambar ) }}" class="img-fluid" alt="">
           </div>
   
           <div class="body p-2 pt-3">
               <p class="fw-bold text-break fs-5 ps-3" style="text-align: justify;">
                   &emsp; {{ $berita -> deskripsi }}
               </p>
           </div>
           @endforeach
       </div>

    </div>
@endsection
