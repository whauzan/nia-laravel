@extends('layout.master')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master TV Kabel SDM</h2>
            <ul>
            <div class="text-right">
                  <a href="{{ route("export_excel_tv_template_sdm") }}" ><button type="submit" class="btn btn-primary">Unduh Template</button></a>
                  <a href="{{ route("import_tv_sdm") }}" ><button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>


            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
               <a href="{{ route('filter_list_excel_tv_sdm', "01") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Januari 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "02") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Februari 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "03") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Maret 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "04") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan April 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "05") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Mei 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "06") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Juni 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "07") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Juli 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "08") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Agustus 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "09") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan September 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "10") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Oktober 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "11") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan November 2022</button></a>
               <a href="{{ route('filter_list_excel_tv_sdm', "12") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Desember 2022</button></a>
            </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
