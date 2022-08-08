@extends('layout.master2')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master TV Kabel IT</h2>
            <ul>
            <div class="text-right">
                  <a href="/list_excel_tv_kabel_IT/export_excel_template" ><button type="submit" class="btn btn-primary">Unduh Template</button></a>
                  <a href="/upload_file_excel_master_data_tv_kabel_IT_Template" ><button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>


            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
               <a href="/master_data_tv_kabel_IT/filter" ><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Januari 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter2" > <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Februari 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter3" ><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Maret 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter4" > <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan April 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter5" ><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Mei 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter6" > <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Juni 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter7" ><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Juli 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter8" > <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Agustus 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter9" ><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan September 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter10" > <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Oktober 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter11" ><button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan November 2022</button></a>
               <a href="/master_data_tv_kabel_IT/filter12" > <button type="button" class="list-group-item list-group-item-action">Database TV Kabel Bulan Desember 2022</button></a>
            </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
