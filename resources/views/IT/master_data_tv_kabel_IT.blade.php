
@extends('layout.master2')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-10">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Master Data TV Kabel</h2>
                <ul>
                    <div class="text-right">
                        <a href="/master_data_tv_kabel_IT/export_excel" ><button type="submit" class="btn btn-primary rounded-pill">Unduh</button></a>
                    </div>
                </ul>
        </div>

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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($master_data_tv_kabel_IT as $s)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$s->nomor_pegawai}}</td>
                                            <td>{{ $s->nama}}</td>
                                            <td>{{ $s->nomor_hp}}</td>
                                            <td>{{$s->pemakaian}}</td>
                                            <td>{{$s->plafon}}</td>
                                            <td>{{$s->roaming_ln}}</td>
                                            <td>{{$s->beban_pegawai}}</td>
                                            <td>{{$s->beban_perusahaan}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                </table>

                  <div class="text-right">
                   <a href="/upload_file_excel_master_data_IT"> <button type="submit" class="btn btn-primary" data-toggle="modal">Import Data Excel </button></a></a>
                  </div>



</div>


</div><!-- End Recent Sales -->



@yield('content')
@endsection
