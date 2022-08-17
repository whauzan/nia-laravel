
@extends('layout.master')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-10">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Master Data Internet</h2>


<div>
<ul>
  <div class="text-right">
    <a href="{{ route("export_excel_internet_sdm") }}" ><button type="submit" class="btn btn-primary rounded-pill">Unduh</button></a>
  </div>
</ul>
</div>

<table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Biaya Admin</th>
                        <th scope="col">Total</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=1 @endphp
                                    @foreach($master_data_internet_sdm as $s)
                                        <tr>
                                            <td>{{$i++}}</td>
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
                   <a href="{{ route("import_internet_sdm") }}"> <button type="submit" class="btn btn-primary" data-toggle="modal">Import Data Excel </button></a></a>
                  </div>

                </div>

              </div>
            </div><!-- End Recent Sales -->


@yield('content')
@endsection
