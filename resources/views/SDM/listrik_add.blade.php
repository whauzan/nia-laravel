@extends('layout.master')

@section('content')


    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Tambah Data Listrik</h2>

    <!-- Vertical Form -->
    <form class="row g-3" method="POST" action="{{ route("confirm_add_listrik_sdm") }}" enctype="multipart/form-data">
        @csrf
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor Pegawai</label>
        <input type="text" class="form-control" id="inputNanme4" name="nomor_pegawai">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputEmail4" name="nama">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputPassword4" name="alamat">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nomor Kontrol</label>
        <input type="text" class="form-control" id="inputAddress" name="nomor_kontrol">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian</label>
        <input type="text" class="form-control" id="inputAddress" name="pemakaian">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Biaya Admin</label>
        <input type="text" class="form-control" id="inputAddress" name="biaya_admin">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian (F+G)</label>
        <input type="text" class="form-control" id="inputAddress" name="pemakaian_FG">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Plafon</label>
        <input type="text" class="form-control" id="inputAddress" name="plafon">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Pegawai</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_pegawai">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Perusahaan</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_perusahaan">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Keterangan</label>
        <select class="form-control" name="keterangan">
            <option value="lunas">Lunas</option>
            <option value="belum lunas" selected>Belum Lunas</option>
        </select>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="inputAddress" name="tanggal">
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
@yield('content')
@endsection