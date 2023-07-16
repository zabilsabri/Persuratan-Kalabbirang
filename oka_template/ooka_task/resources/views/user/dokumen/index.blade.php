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

        <table class="table" id="tableDokumen" style="width: 100%;">
            <thead style="background-color: #CCFFDA;">
                <tr>
                    <th>No</th>
                    <th>Nama File</th>
                    <th>Uploaded At</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody style="background-color: white;">
                @foreach($pengantars as $index => $pengantar)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pengantar -> nama_file_surat }}</td>
                    <td>{{ $pengantar -> created_at }}</td>
                    <td>
                        <a href="{{ route('showFile', [$pengantar->file_surat]) }}">
                            <img src="{{ asset('image/pdf_logo.png') }}" width="30" height="30" class="img-fluid" alt="gambar logo pdf">
                        </a>
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
                $('#tableDokumen').DataTable({
                    scrollX: true,
                });
            });
        }
    </script>
@endpush