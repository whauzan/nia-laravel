@extends('layout.master')

@section('content')
    <section class="probootstrap-intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="">Selamat Datang di VERSITY</h1>
                <div class="probootstrap-subtitle">
                  <h2>Merupakan layanan sistem milik departemen SDM Operasional yang bertujuan untuk membantu mengelola dan mengolah data karyawan Perum PERURI<a href=""></a></h2>
                </div>
              </div>
            </div>
          </div>
        </section>
    <section class="probootstrap-section probootstrap-feature-first">
    <div class="container">
      <div class="row mb70" style="margin-top: -120px;">
        <div class="col-md-6">
          <div class="probootstrap-box">
              <h3>Master Data</h3>
              <p>Merupakan kumpulan data & fasilitas karyawan Perum Peruri. Kunjungi jika anda ingin melihat data fasilitas karyawan</p>
              <div class="row">
                <div class="col-md-6 col-md-offset-4">
                  <p class="text-center">
                    <a href={{ route("master_data") }} class="btn btn-primary btn-lg btn-block" role="button">Get started</a>
                  </p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-box">
              <h3>Verifikasi Data</h3>
              <p>bertujuan untuk memverifikasi data yang diperlukan. Kunjungi jika anda ingin memverifikasi data</p>
                <div class="row">
                  <div class="col-md-6 col-md-offset-4">
                    <p class="text-center">
                      <a href="{{ route("verifikasi_sdm") }}" class="btn btn-primary btn-lg btn-block" role="button">Get started</a>
                    </p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->

  <!-- START: section -->
  <footer role="contentinfo" class="probootstrap-footer">
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 section-heading mb50 text-center">
          <h2>VERSITY.</h2>
          <p class="lead">Verification System PERURI</p>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <p>
            <small>&copy; 2022 <i>VERSITY</i>. All Rights Reserved. <br> Designed &amp; Developed by <i>SDM Operasional PERURI</i></small>
          </p>
          
        </div>
      </div>
    </div>
  </div>
  </section>
  </footer>
@endsection