@extends('layout.master3')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master Data Listrik Keuangan</h2>
            <ul>
            <div class="text-right">
             <a href="/list_excel_listrik_keuangan/export_excel_template" > <button type="submit" class="btn btn-primary">Unduh Template</button></a>
             <a href="/upload_file_excel_master_data_listrik_keuangan_Template" > <button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>
            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
               <a href="/master_data_listrik_keuangan/filter" ><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Januari 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter2" > <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Februari 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter3" ><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Maret 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter4" > <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan April 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter5" ><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Mei 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter6" > <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Juni 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter7" ><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Juli 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter8" > <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Agustus 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter9" ><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan September 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter10" > <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Oktober 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter11" ><button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan November 2022</button></a>
               <a href="/master_data_listrik_keuangan/filter12" > <button type="button" class="list-group-item list-group-item-action">Database Listrik Bulan Desember 2022</button></a>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
