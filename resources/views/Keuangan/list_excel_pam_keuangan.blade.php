@extends('layout.master3')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master Data PAM Keuangan</h2>
            <ul>
            <div class="text-right">
                    <a href="{{ route("export_excel_pam_template_keuangan") }}" > <button type="submit" class="btn btn-primary">Unduh Template</button></a>
                     <a href="{{ route("import_pam_keuangan") }}" ><button type="submit" class="btn btn-primary">Unggah Data</button></a>
                  </div>
            </ul>
              <!-- List group with Links and buttons -->
              <div class="list-group">
               <a href="{{ route('filter_list_excel_pam_keuangan', "01") }}"><button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Januari 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "02") }}"> <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Februari 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "03") }}"><button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Maret 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "04") }}"> <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan April 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "05") }}"><button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Mei 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "06") }}"> <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Juni 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "07") }}"><button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Juli 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "08") }}"> <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Agustus 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "09") }}"><button type="button" class="list-group-item list-group-item-action">Database PAM Bulan September 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "10") }}"> <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Oktober 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "11") }}"><button type="button" class="list-group-item list-group-item-action">Database PAM Bulan November 2022</button></a>
               <a href="{{ route('filter_list_excel_pam_keuangan', "12") }}"> <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Desember 2022</button></a>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection
