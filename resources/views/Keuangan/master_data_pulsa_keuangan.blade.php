
@extends('layout.master3')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-10">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Master Data Pulsa</h2>


<ul>
<div class="text-right">
                <a href="{{ route("export_excel_pulsa_keuangan") }}" ><button type="submit" class="btn btn-primary rounded-pill">Unduh</button></a>
                  </div>
</ul>

<table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pegawai</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No.Telepon</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Plafon</th>
                        <th scope="col">Roaming LN</th>
                        <th scope="col">Beban Pegawai</th>
                        <th scope="col">Beban Perusahaan</th>
                        <th scope="col">Tagihan</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                                 @php $i=1 @endphp
                                    @foreach($master_data_pulsa_keuangan as $s)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$s->nomor_pegawai}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->no_hp}}</td>
                                            <td>{{$s->pemakaian}}</td>
                                            <td>{{$s->plafon}}</td>
                                            <td>{{$s->roaming_ln}}</td>
                                            <td>{{$s->beban_pegawai}}</td>
                                            <td>{{$s->beban_perusahaan}}</td>
                                            <td>
                                            @if($s->tagihan=='lunas')
                                                <span class="badge bg-success">lunas</span>
                                            @elseif($s->tagihan =='belum lunas')
                                                <span class="badge bg-danger">belum lunas</span>
                                            @endif
                                            </td>
                                            @php
                                                $tanggal = date('d-m-Y', strtotime($s->tanggal));
                                            @endphp
                                           <td>{{$tanggal}}</td>
                                        </tr>
                                    @endforeach
                    </tbody>
                  </table>

                   <div class="text-right">
                   <a href="{{ route("import_pulsa_keuangan") }}"> <button type="submit" class="btn btn-primary" data-toggle="modal">Import Data Excel </button></a></a>
                  </div>

                </div>

              </div>
            </div><!-- End Recent Sales -->


@yield('content')
@endsection
