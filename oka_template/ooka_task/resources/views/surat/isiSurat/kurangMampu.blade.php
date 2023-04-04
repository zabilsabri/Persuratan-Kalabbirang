@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Kurang Mampu'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN KURANG MAMPU</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-sm">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini {{ $data -> ttd -> user -> role -> nama ?? '-' }} Kalabbirang, Kecamatan Pattallassang, Kabupaten Takalar, menerangkan bahwa:</p>
        <table class="ps-5 lh-sm">
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
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $data -> user -> pekerjaan }}</td>
            </tr>
            <tr>
                <td>Jumlah Tanggungan</td>
                <td>:</td>
                <td>{{ $data -> jml_tanggungan }}</td>
            </tr>
            <tr>
                <td>Jumlah Penghasilan</td>
                <td>:</td>
                <td>Rp. {{ $data -> jml_penghasilan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data -> user -> alamat }}</td>
            </tr>
        </table>
        <p class="mt-2" >Yang tersebut diatas benar adalah orang tua / wali dari anak:</p>
        <table class="ps-5 lh-sm">
            <tr >
                <td>Nama</td>
                <td>:</td>
                <td>{{ $data -> nama_anak }}</td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td>{{ $data -> tempat_lahir_anak }}, {{ $data -> tanggal_lahir_anak }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $data -> pekerjaan_anak }}</td>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td>:</td>
                <td>{{ $data -> nama_SekolahAnak }}</td>
            </tr>  
            <tr>
                <td>NIS / Kelas</td>
                <td>:</td>
                <td>{{ $data -> nis_kelas_anak }}</td>
            </tr>  
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data -> alamat_anak }}</td>
            </tr>
        </table>
        <p class="mt-2" style="text-indent: 2em;" >
            Orang tua / Wali tersebut diatas adalah seorang {{ $data -> user -> pekerjaan }} berdomisili
            di Lingkungan Kalabbirang dengan penghasilan Rp.{{ $data -> jml_penghasilan }} setiap bulannya sehingga
            benar kurang mampu membiayai pendidikan anaknya dengan Tanggungan {{ $data -> jml_tanggungan }} Orang.
        </p>
        <p>Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd1')

@endsection