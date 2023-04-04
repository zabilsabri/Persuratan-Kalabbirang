@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Usaha'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN USAHA</h6>
<p>Nomor: {{ $data -> no_surat }}</p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-3">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini {{ $data -> ttd -> user -> role -> nama ?? '(Jabatan Yang Menandatangani)' }} Kalabbirang, Kecamatan Pattallassang, Kabupaten Takalar, menerangkan bahwa:</p>

        <table class="ps-5 lh-lg">
            <tr >
                <td>Nama</td>
                <td>:</td>
                <td>{{ $data -> user -> nama }}</td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td>{{ $data -> user -> tempat_lahir }}, {{ $data -> user -> tanggal_lahir }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $data -> user -> nik }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{ $data -> user -> status_nikah }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $data -> user -> agama }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $data -> user -> pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data -> user -> alamat }}</td>
            </tr>
        </table>
        <p>Benar yang tersebut namanya memiliki / menjalankan Usaha:</p>
        <table class="ps-5 lh-lg">
            <tr >
                <td>Bidang Usaha</td>
                <td>:</td>
                <td>{{ $data -> bidang_usaha }}</td>
            </tr>
            <tr>
                <td>Bentuk Usaha</td>
                <td>:</td>
                <td>{{ $data -> bentuk_usaha }}</td>
            </tr>
            <tr>
                <td>Alamat Usaha</td>
                <td>:</td>
                <td>{{ $data -> alamat_usaha }}</td>
            </tr>
            <tr>
                <td>Usaha</td>
                <td>:</td>
                <td>{{ $data -> durasi_usaha }}</td>
            </tr>            
        </table>
        <p>Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd1')

@endsection