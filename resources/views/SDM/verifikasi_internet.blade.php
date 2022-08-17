
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
                        <th scope="col">No Telepon</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Biaya Admin</th>
                        <th scope="col">Total</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=1 @endphp
                                    @foreach($verifikasi_data_internet_sdm as $s)
                                      <tr>
                                        <td><a href="{{ route("verifikasi_internet_edit_sdm", $s->idDataInternet) }}">{{$i++}}</a></td>
                                        <td>{{$s->nomor_hp}}</td>
                                        <td>{{$s->pemakaian}}</td>
                                        <td>{{$s->biaya_admin}}</td>
                                        <td>{{$s->total}}</td>
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
                    <a href="{{ route('verifikasi_internet_confirm_sdm') }}" type="submit" class="btn btn-primary">Approve</a>
                  </div>
    {{-- </form> --}}
                </div>

              </div>
            </div><!-- End Recent Sales -->
      

@yield('content')
@endsection
                