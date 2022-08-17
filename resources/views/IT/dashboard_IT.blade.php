
@extends('layout.master2')

@section('content')

        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Selamat Datang di Master Data IT</h1>
                    </div>
                </div>
            </div>
        </header>


        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <a href="{{ route("list_excel_pulsa_IT") }}" class="fs-4 fw-bold">Master Data Pulsa</a>
                                <ul>
                                 <a href="{{ route("list_excel_pulsa_IT") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src="assets/pulsa.png" class="img-fluid my-4 " /></span></a>
                               </ul>
                                <p class="mb-0">Kunjungi jika ingin mengunggah atau mengunduh data terkait fasilitas Pulsa</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="{{ route("list_excel_tv_IT") }}" class="fs-4 fw-bold">Master Data TV Kabel</a>
                                <ul>
                               <a href="{{ route("list_excel_tv_IT") }}" class="fs-4 fw-bold"><span class="img-1 text-center"><img src="assets/tv1.png" class="img-fluid my-4 " /></span></a>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin mengunggah atau mengunduh data terkait fasilitas TV Kabel</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


@endsection
