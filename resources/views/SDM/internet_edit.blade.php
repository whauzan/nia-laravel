
@extends('layout.master')

@section('content')


    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Edit Internet</h2>

    <!-- Vertical Form -->
    <form class="row g-3" method="POST" action="{{ route("internet_edit_confirm_sdm") }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="idDataInternet" value="{{ request()->segment(4) }}">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor HP</label>
        <input type="text" class="form-control" id="inputNanme4" name="nomor_hp" value="{{ $data_internet_sdm->nomor_hp }}">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Pemakaian</label>
        <input type="text" class="form-control" id="inputEmail4" name="pemakaian" value="{{ $data_internet_sdm->pemakaian }}">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Biaya Admin</label>
        <input type="text" class="form-control" id="inputPassword4" name="biaya_admin" value="{{ $data_internet_sdm->biaya_admin }}">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Total</label>
        <input type="text" class="form-control" id="inputAddress" name="total" value="{{ $data_internet_sdm->total }}">
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