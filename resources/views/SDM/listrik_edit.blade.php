
@extends('layout.master')

@section('content')


    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Edit Listrik</h2>

    <!-- Vertical Form -->
    <form class="row g-3" method="POST" action="{{ route("listrik_edit_confirm_sdm") }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="idDataListrik" value="{{ request()->segment(4) }}">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor Pegawai</label>
        <input type="text" class="form-control" id="inputNanme4" name="nomor_pegawai" value="{{ $data_listrik_sdm->nomor_pegawai }}">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputEmail4" name="nama" value="{{ $data_listrik_sdm->nama }}">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputPassword4" name="alamat" value="{{ $data_listrik_sdm->alamat }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nomor Kontrol</label>
        <input type="text" class="form-control" id="inputAddress" name="nomor_kontrol" value="{{ $data_listrik_sdm->nomor_kontrol }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian</label>
        <input type="text" class="form-control" id="inputAddress" name="pemakaian" value="{{ $data_listrik_sdm->pemakaian }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Biaya Admin</label>
        <input type="text" class="form-control" id="inputAddress" name="biaya_admin" value="{{ $data_listrik_sdm->biaya_admin }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian (F+G)</label>
        <input type="text" class="form-control" id="inputAddress" name="pemakaian_FG" value="{{ $data_listrik_sdm->pemakaian_FG }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Plafon</label>
        <input type="text" class="form-control" id="inputAddress" name="plafon" value="{{ $data_listrik_sdm->plafon }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Pegawai</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_pegawai" value="{{ $data_listrik_sdm->beban_pegawai }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Perusahaan</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_perusahaan" value="{{ $data_listrik_sdm->beban_perusahaan }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Keterangan</label>
        <select class="form-control" name="keterangan">
            <option value="{{ $data_listrik_sdm->keterangan }}" selected>Tidak Berubah ({{ $data_listrik_sdm->keterangan }})</option>
            <option value="lunas">Lunas</option>
            <option value="belum lunas">Belum Lunas</option>
        </select>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
@yield('content')
@endsection