@extends('layout.master2')

@section('content')
    <section class="section">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Edit Profil</h2>
                            <form action="{{ route("profil_IT_update") }}" class="row g-3" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="hidden" name="oldId" value="{{ auth()->user()->id }}">
                                <div class="col-12">
                                    <label for="inputName" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="inputName" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="col-12">
                                    <label for="inputId" class="form-label">Nomor Pegawai</label>
                                    <input type="text" class="form-control" id="inputId" name="id" value="{{ $user->id }}">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection