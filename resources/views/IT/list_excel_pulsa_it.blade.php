@extends('layout.master2')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master Data Pulsa IT</h2>
            <ul>
            <div class="text-right">
                <a href="/list_excel_pulsa_IT/export_excel_template" ><button type="submit" class="btn btn-primary">Unduh Template</button></a>
                <a href="/upload_file_excel_master_data_pulsa_IT_Template" ><button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>
            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
                  <a href="/master_data_pulsa_IT/filter" ><button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Januari 2022</button></a>
               <a href="/master_data_pulsa_IT/filter2" > <button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Februari 2022</button></a>
               <a href="/master_data_pulsa_IT/filter3" ><button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Maret 2022</button></a>
               <a href="/master_data_pulsa_IT/filter4" > <button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan April 2022</button></a>
               <a href="/master_data_pulsa_IT/filter5" ><button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Mei 2022</button></a>
               <a href="/master_data_pulsa_IT/filter6" > <button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Juni 2022</button></a>
               <a href="/master_data_pulsa_IT/filter7" ><button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Juli 2022</button></a>
               <a href="/master_data_pulsa_IT/filter8" > <button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Agustus 2022</button></a>
               <a href="/master_data_pulsa_IT/filter9" ><button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan September 2022</button></a>
               <a href="/master_data_pulsa_IT/filter10" > <button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Oktober 2022</button></a>
               <a href="/master_data_pulsa_IT/filter11" ><button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan November 2022</button></a>
               <a href="/master_data_pulsa_IT/filter12" > <button type="button" class="list-group-item list-group-item-action">Database Pulsa Bulan Desember 2022</button></a>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
