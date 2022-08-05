@extends('layout.master2')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master TV Kabel IT</h2>
            <ul>
            <div class="text-right">
                  <a href="/list_excel_tv_kabel_IT/export_template_excel" ><button type="submit" class="btn btn-primary">Unduh Template</button></a>
                   <a href="/list_excel_tv_kabel_IT/import_template_excel" ><button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>


            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Januari 2022</button>
                <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Februari 2022</button>
                <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Maret 2022</button>
                <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan April 2022</button>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
