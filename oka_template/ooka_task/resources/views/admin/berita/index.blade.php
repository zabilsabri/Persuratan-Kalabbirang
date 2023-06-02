@extends('admin.layouts.app', ['title' => 'Berita'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show w-100 mb-0" role="alert">
        <strong> {{$message}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="hal-head mb-3">
        <div class="d-flex flex-column">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Berita </h1>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="px-4">
                        <div class=" text-right px-4 pt-3 mb-4">
                            <a href="{{ route('berita-admin.tambah') }}" class="btn text-white btn-success">
                                <i class="ion ion-plus"></i> Tambah Berita
                            </a>
                        </div>
                        <!-- Set up the datatable -->
                        <table class="table" id="tableBerita">
                            <thead style="background-color: #CCFFDA;">
                                <tr>
                                    <th scope="col" style="width: 10px;">No</th>
                                    <th scope="col">Judul Berita</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Tgl Publikasi</th>
                                    <th scope="col" style="width: 100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($beritas as $index => $berita)
                                    <tr>
                                        <td scope="col">{{ $index + 1 }}</td>
                                        <td scope="col">{{ $berita -> judul }}</td>
                                        <td scope="col">{{ $berita -> penulis }}</td>
                                        <td scope="col">{{ $berita -> tgl_berita }}</td>
                                        <td>
                                            {{-- Detail --}}
                                            <a href="{{ route('berita-admin.detail', [$berita -> id]) }}" class="btn btn-warning">
                                                <i class="ion ion-information"></i>
                                            </a>
                                            {{-- Edit --}}
                                            <a href="{{ route('berita-admin.edit', [$berita -> id]) }}" class="btn btn-primary">
                                                <i class="ion ion-compose"></i>
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
    </div>

    <script>
    $(document).ready( function () {
            $('#tableBerita').DataTable({
                scrollX: true,
            });
        } );
    </script>
@endsection
