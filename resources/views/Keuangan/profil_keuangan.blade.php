
@extends('layout.master3')

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
            <h4 class="my-3">Admin Keuangan</h4>
            <p class="text-muted mb-1">
              PERUM PERURI
            </p>
            <a href="{{ route("profil_keuangan_edit") }}" type="submit" class="btn btn-primary">Edit</a>
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
                <p class="text-muted mb-0">Admin Keuangan</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nomor Pegawai</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->id }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->name }}</p>
              </div>
            </div>
            <hr>
            {{-- <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">peruri123</p>
              </div>
            </div> --}}
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@yield('content')
@endsection
