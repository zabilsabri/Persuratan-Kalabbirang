@extends('admin.layouts.app', ['title' => 'Data Warga'])
<link rel="stylesheet" href="{{ asset('style/css/verifikasiUser.css')}}">
<style>
  select.special{
    display: inline;
    width: 300px;
    margin-left: 25px;
  }
</style>
@section('content')
<div class="hal-head">
    <h1>Data Warga</h1>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist"
        style="margin-left: 30px;margin-right: 30px;border-bottom-width: 0px;">
        <button class="nav-link active" id="nav-verifikasi-tab" data-bs-toggle="tab" data-bs-target="#nav-verifikasi"
            type="button" role="tab" aria-controls="nav-verifikasi" aria-selected="true">Verifikasi</button>
        <button class="nav-link" id="nav-data-warga-tab" data-bs-toggle="tab" data-bs-target="#nav-data-warga"
            type="button" role="tab" aria-controls="nav-data-warga" aria-selected="false">Data Warga</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-verifikasi" role="tabpanel" aria-labelledby="nav-verifikasi-tab"
        tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
                <div class="category-filter">
                    <select id="categoryFilter" class="form-control special">
                        <option value="">Status Verifikasi (Show All)</option>
                        <option value="Ya">Telah Verifikasi</option>
                        <option value="Belum">Belum Verifikasi</option>
                    </select>
                </div>

                <!-- Set up the datatable -->
                <table class="table" id="filterTable">
                    <thead style="background-color: #CCFFDA;" >
                        <tr>
                            <th scope="col" style="width: 10px;">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" style="width: 150px;">Status Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <td scope="col">{{ $index + 1 }}</td>
                                <td scope="col">{{ $user -> nama }}</td>
                                <td scope="col">{{ $user -> nik }}</td>
                                <td scope="col">{{ $user -> alamat ?? '-' }}</td>
                                @if($user -> verif_user != 0)
                                    <td scope="col"><a class="text-success" href="{{ route('yes-verif', [$user -> id]) }}">Ya</a></td>
                                @else
                                    <td scope="col"><a class=" text-danger" href="{{ route('not-verif', [$user -> id]) }}">Belum</a></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-data-warga" role="tabpanel" aria-labelledby="nav-data-warga-tab" tabindex="0"
        style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body p-4">
                <table class="table" id="filterTable2">
                    <thead style="background-color: #CCFFDA;" >
                        <tr>
                            <th scope="col" style="width: 10px;">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users_all as $index2 => $user_all)
                        <tr>
                            <td scope="col">{{ $index2 + 1 }}</td>
                            <td scope="col">{{ $user_all -> nama }}</td>
                            <td scope="col">{{ $user_all -> nik }}</td>
                            <td scope="col">{{ $user_all -> alamat ?? '-' }}</td>
                            <td>
                                {{-- Detail --}}
                                <a href="{{ route('detail-warga', [$user_all -> id]) }}" class="btn btn-warning">
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

      $("#filterTable").dataTable({
        "searching": true
      });

      $("#filterTable2").dataTable({
        "searching": true
      });

      var table = $('#filterTable').DataTable();

      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));

      var categoryIndex = 0;
      $("#filterTable th").each(function (i) {
        if ($($(this)).html() == "Status Verifikasi") {
          categoryIndex = i; return false;
        }
      });

      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem = $('#categoryFilter').val()
          var category = data[categoryIndex];
          if (selectedItem === "" || category.includes(selectedItem)) {
            return true;
          }
          return false;
        }
      );

      $("#categoryFilter").change(function (e) {
        table.draw();
      });

      table.draw();
    });
  </script>
@endsection