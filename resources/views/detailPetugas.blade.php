@extends('layout.main')

@section('title', 'Petugas')

@section('head_title', 'Petugas')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <!-- Card header -->
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Detail Petugas</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/theme/team-1.jpg') }}" width="200">
                </div>
                <div class="col-md-5">
                    <table cellpadding="9">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $data['nama'] }}</td>
                        </tr>
                        <tr>
                            <td>posisi_petugas</td>
                            <td>:</td>
                            <td>{{ $data['posisi_petugas'] }}</td>
                        </tr>
                        <tr>
                            <td>no_hp</td>
                            <td>:</td>
                            <td>{{ $data['no_hp'] }}</td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>:</td>
                            <td>{{ $data['email'] }}</td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td>:</td>
                            <td> {{ $data['tempat_lahir'] }},  {{ $data['tgl_lahir'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- form modal input data dibawah -->
  <div class="row">
    <div class="col-md-4">
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Tambah Data Petugas</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">

              <form action="/petugas/addPetugas" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nama Petugas" type="text" name="nama">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="email">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Kata Sandi" type="password" name="password">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Konfirmasi Kata Sandi" type="password" name="password2">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Alamat Petugas" type="text" name="alamat">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-image"></i></span>
                        </div>
                        <input class="form-control" placeholder="Foto Titik Banjir" type="file" multiple name="foto">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                        </div>
                        <input class="form-control" placeholder="Posisi" type="text" name="posisi_petugas">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                        </div>
                        <input class="form-control" placeholder="No Hp" type="text" name="no_hp">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                        </div>
                        <input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input class="form-control" type="date" id="example-date-input" name="tgl_lahir">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-12">
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary my-4">Kirim</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection