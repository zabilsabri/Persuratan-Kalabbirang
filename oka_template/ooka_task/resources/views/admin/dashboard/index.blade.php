@extends('admin.layouts.app', ['title' => 'Dashboard - Admin'])

<style>
    .img-fluid{
        height: 100% !important;
        max-width: 100% !important;
    }
</style>

@section('content')
    <div class="section-header">
        <h1>Selamat Datang, Admin ! </h1>
        <div class="section-header-breadcrumb mr-3">
            <div class="breadcrumb-item active"><a href="#" class="breadcrump-dashboard">Home</a></div>
            <div class="breadcrumb-item"><a href="#" class="breadcrump-dashboard">Admin</a></div>
        </div>
    </div>
    <div class="row ms-2 me-2">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>User Terdaftar</h4>
                    </div>
                    <div class="card-body">
                        {{ $users_all }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>User Terverifikasi</h4>
                    </div>
                    <div class="card-body">
                        {{ $users_verif }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>Surat Masuk</h4>
                    </div>
                    <div class="card-body">
                        {{ $jumlah_surat_masuk }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 p-2 pb-4">
                <div class="card-wrap">
                    <div class="card-header pb-3">
                        <h4>Surat Keluar</h4>
                    </div>
                    <div class="card-body">
                        {{ $jumlah_surat_keluar }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="section-body ms-3 me-3">
        <div class="row">

            <div class="col-12 col-md-8 col-lg-7">
                <div class="card" style="background-color: transparent; box-shadow: none;">
                    <div class="card-header" style="border-bottom-color: transparent;">
                        <h3 class="text-success">Data Kunjungan Website</h3>
                    </div>
                    <div class="card-body" class="img-fluid" style="max-width: 400px">
                        <canvas id="myChart4" ></canvas>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-5">
                <div class="card" style="background-color: transparent; box-shadow: none;">
                    <div class="card-header" style="border-bottom-color: transparent;">
                        <h4 class="text-success">3 Warga Terbaru Membuat Akun</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($users as $user)
                           <li class="list-group list-group-flush mb-3">
                               <div class="d-flex align-items-center">
                                   <figure class="avatar mr-2 avatar-lg">
                                       <img src="{{ asset('temp_file/profile/' . $user->profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" alt="...">
                                   </figure>
                                   <h5 class="mx-3">{{ $user -> nama }}</h5>
                               </div>
                           </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr class="mb-0">
    <div class="berita-section">
        <div class="berita-title">
            <p class="berita-section-title"> Berita </p>
        </div>
        <div class="berita-body mt-4 mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($beritas as $berita)
                <div class="col mb-2">
                    <a href="{{ route('detail.berita', [$berita -> id]) }}">
                        <div class="container-berita img-fluid">
                            <img src="{{ asset('temp_file/berita/'. $berita -> gambar ) }}" class="p-auto" alt="Snow" style="width:100%; height:217px">
                            <div class="bottom-left">
                            <p class="berita-img" >
                                <span class="judul-berita-img" > {{ $berita -> judul }} </span> <br> {{ $berita -> tgl_berita }}
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </div>

    
  <script>
    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
        data: [
            "{{$totalLoggedInVisitors}}",
            "{{$totalNonLoggedInVisitors}}",
        ],
        backgroundColor: [
            '#67C587',
            '#C4F2CD',
        ],
        label: 'Dataset 1'
        }],
        labels: [
        'Dengan Login',
        'Tanpa Login',
        ],
    },
    options: {
        responsive: true,
        legend: {
        position: 'right',
        },
    }
    });
  </script>
@endsection
