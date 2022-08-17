@extends('layout.master3')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master Data Listrik Keuangan</h2>
            <ul>
            <div class="text-right">
             <a href="{{ route("export_excel_listrik_template_keuangan") }}" > <button type="submit" class="btn btn-primary">Unduh Template</button></a>
             <a href="{{ route("import_listrik_keuangan") }}" > <button type="submit" class="btn btn-primary">Unggah Data</button></a>
                </div>
            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
               <a href="{{ route('filter_list_excel_listrik_keuangan', "01") }}"><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Januari 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "02") }}"> <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Februari 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "03") }}"><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Maret 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "04") }}"> <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan April 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "05") }}"><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Mei 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "06") }}"> <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Juni 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "07") }}"><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Juli 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "08") }}"> <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Agustus 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "09") }}"><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan September 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "10") }}"> <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Oktober 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "11") }}"><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan November 2022</button></a>
               <a href="{{ route('filter_list_excel_listrik_keuangan', "12") }}"> <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Desember 2022</button></a>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
