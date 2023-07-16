@extends('user.layouts.app', ['title' => 'Arsip Surat'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/arsipSurat.css') }}">
    <div class="container-md  py-4">

        <div class="header mb-5">
            <h1 class="text-dark text-center">
                <b>
                    Pengarsipan Surat
                </b>
            </h1>
        </div>

        <table class="table" id="tableArsipSurat" style="width: 100%;">
            <thead style="background-color: #CCFFDA;" >
                <tr>
                    <th scope="col" style="width: 10px;">No</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">No. Surat</th>
                    <th scope="col">Tgl Selesai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arsips as $index => $arsip)
                <tr style="background-color: white;">
                    <td scope="col">{{ $index + 1 }}</td>
                    <td scope="col">{{ $arsip -> jenisSurat -> nama }}</td>
                    <td scope="col">{{ $arsip -> no_surat }}</td>
                    <td scope="col">{{ $arsip -> arsipKeluar -> created_at}}</td>
                    <td>
                        {{-- Detail --}}
                        <a data-bs-toggle="modal" data-bs-target="#modalDetailArsip{{ $arsip -> id }}" class="btn btn-warning">
                            <i class="ion ion-information"></i>
                        </a>
                        {{-- Modal After Klik --}}
                        <div class="modal fade" id="modalDetailArsip{{ $arsip -> id }}" tabindex="-1" aria-labelledby="modalDetailArsip{{ $arsip -> id }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header d-block">
                                        <h1 class="modal-title fs-5" id="modalDetailArsip{{ $arsip -> id }}Label">Data Arsip Surat</h1>
                                        <h6 class="modal-title text-success">No : {{ $arsip -> no_surat }}</h6>
                                    </div>
                                    <div class="modal-body">
                                        <table>
                                            <tr style="height: 40px">
                                                <td class=" fw-bold" style="width: 180px">Tanggal Pengajuan</td>
                                                <td class="text-end">
                                                    :
                                                </td>
                                                <td class="text-success fw-bold ps-2">
                                                    {{ $arsip -> created_at }}
                                                </td>
                                            </tr>

                                            <tr style="height: 40px">
                                                <td class=" fw-bold" style="width: 180px">Tanggal Selesai</td>
                                                <td class="text-end">
                                                    :
                                                </td>
                                                <td class="text-success fw-bold ps-2">
                                                    {{$arsip -> arsipKeluar -> created_at}}
                                                </td>
                                            </tr>

                                            <tr style="height: 40px">
                                                <td class=" fw-bold" style="width: 180px">
                                                    Jenis Surat

                                                </td>
                                                <td class="text-end">
                                                    :
                                                </td>
                                                <td class="text-success fw-bold ps-2">
                                                    {{ $arsip -> jenisSurat -> nama }}
                                                </td>
                                            </tr>

                                            <tr style="height: 40px">
                                                <td class=" fw-bold" style="width: 180px">Penandatanganan</td>
                                                <td class="text-end">
                                                    :
                                                </td>
                                                <td class="text-success fw-bold ps-2">
                                                    {{ $arsip -> ttd -> user -> nama }} ( {{ $arsip -> ttd -> user -> role -> nama }} )
                                                </td>
                                            </tr>

                                            <tr class=" fw-bold" style="width: 180px">
                                                <td>Lampiran</td>
                                            </tr>

                                        </table>
                                        <div class="text-center py-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="{{ route('showFileArsip', [$arsip -> kode_surat]) }}" class="stretched-link">{{ $arsip -> jenisSurat -> nama }}</a></h5>
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>                        
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection


@push('script')
    <script>
    window.onload = function(){
        $(document).ready( function () {
            $('#tableArsipSurat').DataTable({
                scrollX: true,
            });
        });
    }
    </script>
@endpush