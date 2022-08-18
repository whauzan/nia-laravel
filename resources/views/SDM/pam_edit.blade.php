
@extends('layout.master')

@section('content')



    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Edit PAM</h2>

    <!-- Vertical Form -->
    <form class="row g-3" method="POST" action="{{ route("pam_edit_confirm_sdm") }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="idDataPam" value="{{ request()->segment(4) }}">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor Pegawai</label>
        <input type="text" class="form-control" id="inputNanme4" name="nomor_pegawai" value="{{ $data_pam_sdm->nomor_pegawai }}">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputEmail4" name="nama" value="{{ $data_pam_sdm->nama }}">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputPassword4" name="alamat" value="{{ $data_pam_sdm->alamat }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nomor Rekening</label>
        <input type="text" class="form-control" id="inputAddress" name="nomor_rekening" value="{{ $data_pam_sdm->nomor_rekening }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian</label>
        <input type="text" class="form-control" id="inputAddress" name="pemakaian" value="{{ $data_pam_sdm->pemakaian }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Plafon</label>
        <input type="text" class="form-control" id="inputAddress" name="plafon" value="{{ $data_pam_sdm->plafon }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Perusahaan</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_perusahaan" value="{{ $data_pam_sdm->beban_perusahaan }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Keterangan</label>
        <select class="form-control" name="keterangan">
            <option value="{{ $data_pam_sdm->keterangan }}" selected>Tidak Berubah ({{ $data_pam_sdm->keterangan }})</option>
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