
@extends('layout.master2')

@section('content')


  <div class="container py-5">
    <div class="row">
      <div class="col">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="assets/profile.png" alt=""
              class="rounded-circle img-fluid" style="width: 150px;">
            <h4 class="my-3">Admin TI</h4>
            <p class="text-muted mb-1">
              PERUM PERURI
            </p>
            <button type="submit" class="btn btn-primary"><a href="editprofilit">Edit</a></button>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Admin TI</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nomor Pegawai</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">1301194038</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">adminsdm</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">peruri123</p>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@yield('content')
@endsection
