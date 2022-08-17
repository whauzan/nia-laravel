@extends('layout.master')

@section('content')
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Selamat Datang di Verifikasi Data Karyawan</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <a href="{{ route("verifikasi_internet_sdm") }}" class="fs-4 fw-bold">Verifikasi Data Internet</a>
                                <ul>
                                    <a href="{{ route("verifikasi_internet_sdm") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src={{ asset("assets/internet.png") }} class="img-fluid my-4 " /></span></a>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin melakukan verifikasi data terkait fasilitas Internet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <a href="{{ route("verifikasi_listrik_sdm") }}" class="fs-4 fw-bold">Verifikasi Data Listrik</a>
								<ul>
                                    <a href="{{ route("verifikasi_listrik_sdm") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src={{ asset("assets/listrik.png") }} class="img-fluid my-4 " /></span></a>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin melakukan verifikasi data terkait fasilitas Listrik</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="{{ route("verifikasi_pam_sdm") }}" class="fs-4 fw-bold">Verifikasi Data PAM</a>
								<a href="{{ route("verifikasi_pam_sdm") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src={{ asset("assets/air.png") }} class="img-fluid my-4 " /></span></a>
                                <p class="mb-0">Kunjungi jika ingin melakukan verifikasi data terkait fasilitas PAM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <a href="{{ route("verifikasi_pulsa_sdm") }}" class="fs-4 fw-bold">Verifikasi Data Pulsa</a>
                                <ul>
                                    <a href="{{ route("verifikasi_pulsa_sdm") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src={{ asset("assets/pulsa.png") }} class="img-fluid my-4 " /></span></a>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin melakukan verifikasi data terkait fasilitas Pulsa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="{{ route("verifikasi_tv_sdm") }}" class="fs-4 fw-bold">Verifikasi Data TV Kabel</a>
                                <ul>
                                    <a href="{{ route("verifikasi_tv_sdm") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src={{ asset("assets/tv1.png") }} class="img-fluid my-4 " /></span></a>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin melakukan verifikasi data terkait fasilitas TV Kabel</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
@endsection