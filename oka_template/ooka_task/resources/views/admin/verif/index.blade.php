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
                            <tr>
                                <td scope="col">1</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col"><a class="text-success" href="{{ route('yes-verif') }}">Ya</a></td>
                            </tr>
                        <tr>
                            <td scope="col">2</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col"><a class=" text-danger" href="{{ route('not-verif') }}">Belum</a></td>
                        </tr>
                        <tr>
                            <td scope="col">3</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col"><a class="text-success" href="{{ route('yes-verif') }}">Ya</a></td>
                        </tr>
                        <tr>
                            <td scope="col">4</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col" ><a class="text-success" href="{{ route('yes-verif') }}">Ya</a></td>
                        </tr>
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
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">Hip Hop</td>
                            <td scope="col">Hip Hop</td>
                            <td scope="col">Hip Hop</td>
                            <td>
                                {{-- Detail --}}
                                <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
                                    <i class="ion ion-information"></i>
                                </a>
                                {{-- Edit --}}
                                <a href="#" class="btn btn-primary">
                                    <i class="ion ion-compose"></i>
                                </a>
                                {{-- Hapus --}}
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                                    <i class="ion ion-trash-a"></i>
                                </button>
                            </td>                        </tr>
                        <tr>
                            <td scope="col">2</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td>
                                {{-- Detail --}}
                                <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
                                    <i class="ion ion-information"></i>
                                </a>
                                {{-- Edit --}}
                                <a href="#" class="btn btn-primary">
                                    <i class="ion ion-compose"></i>
                                </a>
                                {{-- Hapus --}}
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                                    <i class="ion ion-trash-a"></i>
                                </button>
                            </td>                        </tr>
                        <tr>
                            <td scope="col">3</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td>
                                {{-- Detail --}}
                                <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
                                    <i class="ion ion-information"></i>
                                </a>
                                {{-- Edit --}}
                                <a href="#" class="btn btn-primary">
                                    <i class="ion ion-compose"></i>
                                </a>
                                {{-- Hapus --}}
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                                    <i class="ion ion-trash-a"></i>
                                </button>
                            </td>                        </tr>
                        <tr>
                            <td scope="col">4</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td scope="col">Jazz</td>
                            <td>
                                {{-- Detail --}}
                                <a href="{{ route('berita-admin.detail') }}" class="btn btn-warning">
                                    <i class="ion ion-information"></i>
                                </a>
                                {{-- Edit --}}
                                <a href="#" class="btn btn-primary">
                                    <i class="ion ion-compose"></i>
                                </a>
                                {{-- Hapus --}}
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                                    <i class="ion ion-trash-a"></i>
                                </button>
                            </td>                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  <script>
    $("document").ready(function () {

      $("#filterTable").dataTable({
        "searching": true
      });

      $("#filterTable2").dataTable({
        "searching": true
      });

      //Get a reference to the new datatable
      var table = $('#filterTable').DataTable();

      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));
      
      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
      //This tells datatables what column to filter on when a user selects a value from the dropdown.
      //It's important that the text used here (Category) is the same for used in the header of the column to filter
      var categoryIndex = 0;
      $("#filterTable th").each(function (i) {
        if ($($(this)).html() == "Status Verifikasi") {
          categoryIndex = i; return false;
        }
      });

      //Use the built in datatables API to filter the existing rows by the Category column
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

      //Set the change event for the Category Filter dropdown to redraw the datatable each time
      //a user selects a new filter.
      $("#categoryFilter").change(function (e) {
        table.draw();
      });

      table.draw();
    });
  </script>
@endsection