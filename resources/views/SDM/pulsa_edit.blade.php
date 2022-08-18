
@extends('layout.master')

@section('content')


    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Edit Pulsa</h2>

    <!-- Vertical Form -->
    <form class="row g-3" method="POST" action="{{ route("pulsa_edit_confirm_sdm") }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="idDataPulsa" value="{{ request()->segment(4) }}">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor Pegawai</label>
        <input type="text" class="form-control" id="inputNanme4" name="nomor_pegawai" value="{{ $data_pulsa_sdm->nomor_pegawai }}">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputEmail4" name="nama" value="{{ $data_pulsa_sdm->nama }}">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Nomor HP</label>
        <input type="text" class="form-control" id="inputPassword4" name="no_hp" value="{{ $data_pulsa_sdm->nomor_pegawai }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian</label>
        <input type="text" class="form-control" id="inputAddress" name="pemakaian" value="{{ $data_pulsa_sdm->pemakaian }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Plafon</label>
        <input type="text" class="form-control" id="inputAddress" name="plafon" value="{{ $data_pulsa_sdm->plafon }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Roaming LN</label>
        <input type="text" class="form-control" id="inputAddress" name="roaming_ln" value="{{ $data_pulsa_sdm->roaming_ln }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Pegawai</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_pegawai" value="{{ $data_pulsa_sdm->beban_pegawai }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Perusahaan</label>
        <input type="text" class="form-control" id="inputAddress" name="beban_perusahaan" value="{{ $data_pulsa_sdm->beban_perusahaan }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Tagihan</label>
        <select class="form-control" name="tagihan">
            <option value="{{ $data_pulsa_sdm->tagihan }}" selected>Tidak Berubah ({{ $data_pulsa_sdm->tagihan }})</option>
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