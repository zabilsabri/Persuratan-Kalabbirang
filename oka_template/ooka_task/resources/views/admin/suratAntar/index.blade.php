@extends('admin.layouts.app', ['title' => 'Surat Antar'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">        
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-4"> Pengantaran Surat </h1>
            </div>
        </div>
    </div>
    <div class="section-body">

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-left: 30px;margin-right: 30px;border-bottom-width: 0px;">
            <button class="nav-link active" id="nav-antarMasuk-tab" data-bs-toggle="tab" data-bs-target="#nav-antarMasuk" type="button" role="tab" aria-controls="nav-antarMasuk" aria-selected="true">Surat Masuk</button>
            <button class="nav-link" id="nav-antarKeluar-tab" data-bs-toggle="tab" data-bs-target="#nav-antarKeluar" type="button" role="tab" aria-controls="nav-antarKeluar" aria-selected="false">Surat Keluar</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-antarMasuk" role="tabpanel" aria-labelledby="nav-antarMasuk-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
              <div class="category-filter">
                  <select id="categoryFilterMasuk" class="form-control special">
                      <option value="">Status Antar Surat (Show All)</option>
                      <option value="On Progress"> On Progress</option>
                      <option value="Waiting"> Waiting</option>
                      <option value="Finish/Done"> Finish</option>
                      <option value="Belum Terkirim">Belum Terkirim</option>
                  </select>
              </div>
              <table class="table" id="filterTableMasuk">
                <thead style="background-color: #CCFFDA;" >
                    <tr>
                        <th scope="col" style="width: 10px;">No</th>
                        <th scope="col">Judul Surat</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Tgl Masuk</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($antarMasuks as $index => $antarMasuk)
                    <tr>
                        <td scope="col">{{ $index + 1 }}</td>
                        <td scope="col">{{ $antarMasuk -> suratMasuk -> judul_surat }}</td>
                        <td scope="col">{{ $antarMasuk -> suratMasuk -> asal_surat }}</td>
                        <td scope="col">{{ $antarMasuk -> suratMasuk -> tgl_surat }}</td>
                        <td scope="col"><a href="{{ route('surat-masuk-admin.detailFile', [$antarMasuk -> suratMasuk -> file_surat]) }}">{{ $antarMasuk -> suratMasuk -> judul_surat }}.pdf</a></td>
                        <td scope="col">
                             @if($antarMasuk -> status == "Belum Terkirim")
                                <p><a class="bt" href="{{ route('surat-antar.detailMasuk', [$antarMasuk -> id]) }}">Belum Terkirim</a></p>
                                @elseif($antarMasuk -> status == "On Progress")
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('image/On Progress pic.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-0">
                                        <a class="op" href="{{ route('surat-antar.detailMasuk', [$antarMasuk -> id]) }}">On Progress</a>                
                                    </div>
                                </div>
                                @elseif($antarMasuk -> status == "Waiting")
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('image/Waiting pic.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-0">
                                        <a class="w" href="{{ route('surat-antar.detailMasuk', [$antarMasuk -> id]) }}">Waiting</a>
                                    </div>
                                </div>
                                @elseif($antarMasuk -> status == "Finish/Done")
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('image/Finish pic.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-0">
                                        <a class="f" href="{{ route('surat-antar.detailMasuk', [$antarMasuk -> id]) }}">Finish</a>
                                    </div>
                                </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-antarKeluar" role="tabpanel" aria-labelledby="nav-antarKeluar-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
              <select id="categoryFilterKeluar" class="form-control special">
                    <option value="">Status Antar Surat (Show All)</option>
                    <option value="On Progress"> On Progress</option>
                    <option value="Waiting"> Waiting</option>
                    <option value="Finish/Done"> Finish</option>
                    <option value="Belum Terkirim">Belum Terkirim</option>
              </select>
            <table class="table" id="filterTableKeluar">
                <thead style="background-color: #CCFFDA;" >
                    <tr>
                        <th scope="col" style="width: 10px;">No</th>
                        <th scope="col">Judul Surat</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Tgl Masuk</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col" style="width: 100px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($antarKeluars as $index => $antarKeluar)
                      <tr>
                          <td scope="col">{{ $index + 1 }}</td>
                          <td scope="col">{{ $antarKeluar -> suratKeluar -> jenisSurat -> nama }} ({{ $antarKeluar -> suratKeluar -> kode_surat }})</td>
                          <td scope="col">{{ $antarKeluar -> suratKeluar -> user -> nama }}</td>
                          <td scope="col">{{ $antarKeluar -> suratKeluar -> tgl_surat }}</td>
                          <td scope="col"> <a href="{{ route('export.surat', ['id' => $antarKeluar -> suratKeluar -> id]) }}"> {{ $antarKeluar -> suratKeluar -> jenisSurat -> nama }}.pdf </a> </td>
                          <td scope="col">
                            @if($antarKeluar -> status == "Belum Terkirim")
                            <p><a class="bt" href="{{ route('surat-antar.detailKeluar', [$antarKeluar -> id]) }}">Belum Terkirim</a></p>
                            @elseif($antarKeluar -> status == "On Progress")
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('image/On Progress pic.png') }}" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-0">
                                    <a class="op" href="{{ route('surat-antar.detailKeluar', [$antarKeluar -> id]) }}">On Progress</a>                        
                                </div>
                            </div>
                            @elseif($antarKeluar -> status == "Waiting")
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('image/Waiting pic.png') }}" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-0">
                                    <a class="w" href="{{ route('surat-antar.detailKeluar', [$antarKeluar -> id]) }}">Waiting</a>                        
                                </div>
                            </div>
                            @elseif($antarKeluar -> status == "Finish/Done")
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('image/Finish pic.png') }}" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-0">
                                    <a class="f" href="{{ route('surat-antar.detailKeluar', [$antarKeluar -> id]) }}">Finish</a>                        
                                </div>
                            </div>
                            @endif
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
    window.onload = function(){
        $("document").ready(function () {

        $("#filterTableMasuk").dataTable({
            "searching": true,
            scrollX: true,
        });

        $("#filterTableKeluar").dataTable({
            "searching": true,
            scrollX: true,
        });

        var table = $('#filterTableMasuk').DataTable();
        var table2 = $('#filterTableKeluar').DataTable();

        $("#filterTableMasuk_filter.dataTables_filter").append($("#categoryFilterMasuk"));
        $("#filterTableKeluar_filter.dataTables_filter").append($("#categoryFilterKeluar"));


        $("#categoryFilterMasuk").on('change', function (e) {
            table.column(5).search(this.value).draw();
        });

        $("#categoryFilterKeluar").on('change', function (e) {
            table2.column(5).search(this.value).draw();
        });

        });
    }
  </script>
@endsection
