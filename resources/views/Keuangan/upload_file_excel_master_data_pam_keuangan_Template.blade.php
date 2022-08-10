
@extends('layout.master3')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-10">
    <div class="card">

                     <form method="post" action="/master_data_pam_keuangan/import_excel" enctype="multipart/form-data">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">Import Data Master Excel Pulsa IT</h1>
                            </div>

                            <div class="modal-body">

                                {{ csrf_field() }}

                                <label>Pilih file excel</label>
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>

                            </div>

                            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>

                        </div>
                      </form>
    </div>





</div>


</div><!-- End Recent Sales -->



@yield('content')
@endsection
