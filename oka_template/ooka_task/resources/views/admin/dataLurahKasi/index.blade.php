@extends('admin.layouts.app', ['title' => 'Data Lurah/Kasi'])
<link rel="stylesheet" href="{{ asset('style/css/verifikasiUser.css')}}">

@section('content')
    <div class="hal-head">
        <h1>Data Pegawai</h1>
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
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col" style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawais as $index => $pegawai)
                                <tr>
                                    <td scope="col">{{ $index + 1 }}</td>
                                    <td scope="col">{{ $pegawai -> nama }}</td>
                                    <td scope="col">{{ $pegawai -> nik }}</td>
                                    <td scope="col">{{ $pegawai -> alamat ?? '-' }}</td>
                                    <td scope="col">{{ $pegawai -> role -> nama }}</td>
                                    <td scope="col">
                                        {{-- Detail --}}
                                        <a href="{{ route('detail-lurah-kasi', [$pegawai -> id]) }}" class="btn btn-warning">
                                            <i class="ion ion-information"></i>
                                        </a>
                                    </td>                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>

    <script>
    $("document").ready(function () {

      $("#tableSuratMasuk").dataTable({
        scrollX: true,
      });


    });
  </script>
@endsection
