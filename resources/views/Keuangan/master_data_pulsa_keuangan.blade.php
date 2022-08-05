
@extends('layout.master')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-10">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Master Data Pulsa</h2>


<ul>
<div class="text-right">
                    <button type="submit" class="btn btn-primary rounded-pill">Unduh</button>
                  </div>
</ul>

<table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pegawai</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No.Telepon</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Plafon</th>
                        <th scope="col">Roaming LN</th>
                        <th scope="col">Beban Pegawai</th>
                        <th scope="col">Beban Perusahaan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td>500.000</td>
                        <td>2000</td>
                        <td>502.000</td>
                        <td>600.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td>500.000</td>
                        <td>2000</td>
                        <td>502.000</td>
                        <td>600.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td>500.000</td>
                        <td>2000</td>
                        <td>502.000</td>
                        <td>600.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td>500.000</td>
                        <td>2000</td>
                        <td>502.000</td>
                        <td>600.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td>500.000</td>
                        <td>2000</td>
                        <td>502.000</td>
                        <td>600.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      

@yield('content')
@endsection
                