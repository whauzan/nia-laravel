
@extends('layout.master')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-9">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Verifikasi Internet</h2>


    {{-- <form action="{{ route('verifikasi_internet_confirm_sdm') }}" method="post" enctype="multipart/form-data"> --}}
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
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                                 @php $i=1 @endphp
                                    @foreach($verifikasi_data_pulsa_sdm as $s)
                                        <tr>
                                            <td><a href="{{ route("pulsa_edit_sdm", $s->idDataPulsa) }}">{{$i++}}</a></td>
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
                                           <td><a href="{{ route("pulsa_delete_sdm", $s->idDataPulsa) }}" class="btn btn-primary">Hapus</a></td>
                                        </tr>
                                    @endforeach
                    </tbody>
                  </table>
                  <div class="text-right">
                    {{-- <button type="submit" class="btn btn-primary">Approve</button> --}}
                    <a href="{{ route('verifikasi_pulsa_confirm_sdm') }}" type="submit" class="btn btn-primary">Approve</a>
                  </div>
    {{-- </form> --}}
                </div>

              </div>
            </div><!-- End Recent Sales -->
      

@yield('content')
@endsection
                