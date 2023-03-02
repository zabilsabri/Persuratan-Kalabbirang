@extends('admin.layouts.app', ['title' => 'Surat Antar'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <style>
    select.special{
        display: inline;
        width: 300px;
        margin-left: 25px;
    }
    </style>
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Pengantaran Surat </h1>
            </div>
            
        </div>
    </div>
    <div class="section-body">

        <div class="card p-4">

            <div class="inner-section-body p-4">
            <div class="category-filter">
                <select id="categoryFilter" class="form-control special">
                    <option value="">Status Antar Surat (Show All)</option>
                    <option value="Terkirim">Terkirim</option>
                    <option value="Belum">Belum Terkirim</option>
                    <option value="Dalam Perjalanan">Dalam Perjalanan</option>
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
                        <th scope="col">Dokumen</th>
                        <th scope="col" style="width: 100px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">Hip Hop</td>
                            <td scope="col">Hip Hop</td>
                            <td scope="col">Hip Hop</td>
                            <td scope="col"><a class="text-success" href="{{ route('yes-verif') }}">Ya</a></td>
                            <td scope="col">Terkirim</td>
                        </tr>
                    <tr>
                        <td scope="col">2</td>
                        <td scope="col">Jazz</td>
                        <td scope="col">Jazz</td>
                        <td scope="col">Jazz</td>
                        <td scope="col"><a class=" text-danger" href="{{ route('not-verif') }}">Belum</a></td>
                        <td scope="col">Terkirim</td>
                    </tr>
                    <tr>
                        <td scope="col">3</td>
                        <td scope="col">Jazz</td>
                        <td scope="col">Jazz</td>
                        <td scope="col">Jazz</td>
                        <td scope="col"><a class="text-success" href="{{ route('yes-verif') }}">Ya</a></td>
                        <td scope="col">Belum</td>
                    </tr>
                    <tr>
                        <td scope="col">4</td>
                        <td scope="col">Jazz</td>
                        <td scope="col">Jazz</td>
                        <td scope="col">Jazz</td>
                        <td scope="col" ><a class="text-success" href="{{ route('yes-verif') }}">Ya</a></td>
                        <td scope="col">Dalam Perjalanan</td>
                    </tr>
                </tbody>
            </table>
        </div>          

        </div>
    </div>

    <script>
    $("document").ready(function () {

      $("#filterTable").dataTable({
        "searching": true
      });

      var table = $('#filterTable').DataTable();

      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));

      var categoryIndex = 0;
      $("#filterTable th").each(function (i) {
        if ($($(this)).html() == "Status") {
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
