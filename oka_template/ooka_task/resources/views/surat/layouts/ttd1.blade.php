<div class="surat-ttd">
    <table align="right">
        <tr>
            <td>Kalabbirang, {{ $data -> tgl_ttd ?? '(Tanggal Ditandatangani)' }}</td>
        </tr>
        <tr>
            <td>{{ $data -> ttd -> user -> role -> nama ?? '(Jabatan Yang Menandatangani)' }} KALABBIRANG,</td>
        </tr>
        <tr class="text-center">
            @if(!empty($data -> ttd -> photo_ttd))
            <img src="{{ public_path('temp_file/ttd/'. $data -> ttd -> photo_ttd) }}" width="200" height="170" class="img-thumbnail"/>
            @else
            <img width="400" height="210" class="img-thumbnail"/>
            @endif
        </tr>
        <tr>
            <td class="text-decoration-underline fw-bold" >{{ $data -> ttd -> user -> nama ?? '(Nama Yang Menandatangani)'}}</td>
        </tr>
        <tr>
            <td>Pangkat : -</td>
        </tr>
        <tr>
            <td>Nip. {{ $data -> ttd -> user -> nip ?? '(NIP Yang Menandatangani)' }}</td>
        </tr>
    </table>
</div>