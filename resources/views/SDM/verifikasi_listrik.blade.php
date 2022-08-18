
@extends('layout.master')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-8">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Verifikasi Internet</h2>


    {{-- <form action="{{ route('verifikasi_internet_confirm_sdm') }}" method="post" enctype="multipart/form-data"> --}}
<table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Kontrol</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Biaya Admin</th>
                        <th scope="col">F+G</th>
                        <th scope="col">Plafon</th>
                        <th scope="col">Beban Pegawai</th>
                        <th scope="col">Beban Perusahaan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=1 @endphp
                                    @foreach($verifikasi_data_listrik_sdm as $s)
                                        <tr>
                                            <td><a href="{{ route("listrik_edit_sdm", $s->idDataListrik) }}">{{$i++}}</a></td>
                                            <td>{{$s->nomor_pegawai}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->alamat}}</td>
                                            <td>{{$s->nomor_kontrol}}</td>
                                            <td>{{$s->pemakaian}}</td>
                                            <td>{{$s->biaya_admin}}</td>
                                            <td>{{$s->pemakaian_FG}}</td>
                                            <td>{{$s->plafon}}</td>
                                            <td>{{$s->beban_pegawai}}</td>
                                            <td>{{$s->beban_perusahaan}}</td>
                                            <td>
                                            @if($s->keterangan=='lunas')
                                                <span class="badge bg-success">lunas</span>
                                            @elseif($s->keterangan =='belum lunas')
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
                    {{-- <button type="submit" class="btn btn-primary">Approve</button> --}}
                    <a href="{{ route('verifikasi_listrik_confirm_sdm') }}" type="submit" class="btn btn-primary">Approve</a>
                  </div>
    {{-- </form> --}}
                </div>

              </div>
            </div><!-- End Recent Sales -->
      

@yield('content')
@endsection
                