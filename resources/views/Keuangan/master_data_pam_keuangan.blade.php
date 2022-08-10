
@extends('layout.master3')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-12">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Master Data PAM</h2>


<ul>
    <div class="text-right">
      <a href="/master_data_pam_keuangan/export_excel" ><button type="submit" class="btn btn-primary rounded-pill">Unduh</button></a>
    </div>
</ul>

<table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pegawai</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Rek</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Plafon</th>
                        <th scope="col">Beban Perusahaan</th>
                        <th scope="col">Keterengan</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                           @php $i=1 @endphp
                                    @foreach($master_data_pam_keuangan as $s)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$s->nomor_pegawai}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->alamat}}</td>
                                            <td>{{$s->nomor_rekening}}</td>
                                            <td>{{$s->pemakaian}}</td>
                                            <td>{{$s->plafon}}</td>
                                            <td>{{$s->beban_perusahaan}}</td>
                                            <td>
                                            @if($s->keterangan=='lunas')
                                                <span class="badge bg-success">lunas</span>
                                            @elseif($s->keterangan =='belum lunas')
                                                <span class="badge bg-danger">belum lunas</span>
                                            @endif
                                            </td>
                                           <td>{{$s->tanggal}}</td>
                                        </tr>
                                    @endforeach
                    </tbody>
                  </table>
                  <div class="text-right">
                    <a href="/upload_file_excel_master_data_pam_keuangan"> <button type="submit" class="btn btn-primary" data-toggle="modal">Import Data Excel </button></a></a>
                  </div>

                </div>

              </div>
            </div><!-- End Recent Sales -->


@yield('content')
@endsection
