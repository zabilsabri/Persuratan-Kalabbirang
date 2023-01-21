@extends('admin.layouts.app', ['title' => 'Admin Berita - Detail'])

@section('content')
    <div class="section-header">
        <h1> Detail Berita</h1>
    </div>

    <link rel="stylesheet" href="{{ asset('style/css/berita.css') }}">
    <div class="card">

       <div class="container-md  py-4">
   
           <div class="header">
               <h1 class="text-success text-center">
                   <b>
                       Judul Berita
                   </b>
               </h1>

               <div class="text-success">
                  <h6>
                     <i class="ion ion-ios-world-outline pe-2 fs-3 text-secondary "></i>
                     Sumber
                  </h6>
               </div>

               <div class="d-flex justify-content-start text-success">
                   <h6>
                       <i class="ion ion-location pe-3 fs-2 text-secondary "></i>
                       Lokasi 
                       &emsp;
                   </h6>
                   <h6>
                       <i class="ion ion-calendar pe-1 fs-2 text-secondary"></i>
                       Senin, 12 Januari 2023
                   </h6>
               </div>
           </div>
   
           <div class="hero pt-3">
               <img src="{{ asset('image/dump.png') }}" class="img-fluid" alt="...">
           </div>
   
           <div class="body p-2 pt-3">
               <p class="fw-bold text-break fs-5 ps-3" style="text-align: justify;">
                   &emsp; Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo id culpa quibusdam quia molestias
                   voluptatum exercitationem voluptatibus vero saepe cumque. Lorem ipsum dolor sit amet consectetur adipisicing
                   elit. Nostrum officia quasi nisi neque ipsum! Sapiente aperiam molestiae veritatis cumque ad consequuntur,
                   repellendus veniam nesciunt provident in accusamus minima unde, mollitia, dignissimos dolor. Culpa ex magnam
                   aperiam labore. Ea error, ab temporibus commodi eveniet quo ipsum! Velit dignissimos illum tenetur nulla.
               </p>
           </div>
   
       </div>

    </div>
@endsection
