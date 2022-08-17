@extends('layout.master2')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master TV Kabel IT</h2>
            <ul>
            <div class="text-right">
                  <a href="{{ route("export_excel_tv_template_IT") }}" ><button type="submit" class="btn btn-primary">Unduh Template</button></a>
                  <a href="{{ route("import_tv_IT") }}" ><button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>


            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
                <a href="{{ route('filter_list_excel_tv_IT', "01") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Januari 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "02") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Februari 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "03") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Maret 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "04") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan April 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "05") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Mei 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "06") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Juni 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "07") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Juli 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "08") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Agustus 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "09") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan September 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "10") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Oktober 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "11") }}"><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan November 2022</button></a>
                <a href="{{ route('filter_list_excel_tv_IT', "12") }}"> <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Desember 2022</button></a>
            </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
