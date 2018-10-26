@extends('layouts.template')

@section('content')
<div class="py-2">
    <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
            <div class="panel panel-info">
              <div class="panel-heading"> </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4 col-lg-4" align="center"></div>
                    <div class="col-md-8" align="left">
                      <di>
                        <h2>{{ $pegawai->nama }}</h2>
                      </di>
                    </div>
                    <div class="col-md-4 col-lg-12">
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>NIP               :</td>
                            <td>{{ $pegawai->nip }}</td>
                          </tr>
                          <tr>
                            <td>Jabatan           :</td>
                            <td>{{ $pegawai->jabatan }}</td>
                          </tr>
                          <tr>
                            <td>Periode Kerja     :</td>
                            <td>{{ $pegawai->periode }}</td>
                          </tr>
                          <tr> </tr>
                          <tr>
                            <td>Unit Kerja        :</td>
                            <td>{{ $pegawai->unit }}</td>
                          </tr>
                          <tr>
                            <td>Group/Direktorat  :</td>
                            <td>{{ $pegawai->group}}</td>
                          </tr>
                          <tr></tr>
                          <tr></tr>
                          <tr>
                            <td>Nama Atasan 1     :</td>
                            <td>{{ $pegawai->na1 }}</td>
                          </tr>
                          <tr>
                            <td>NIP Atasan 1      :</td>
                            <td>{{ $pegawai->nip1 }}</td>
                          </tr>
                          <tr>
                            <td>Jabatan Atasan 1  :</td>
                            <td>{{ $pegawai->jbt1 }}</td>
                          </tr>
                          <tr> </tr>
                          <tr>
                            <td>Nama Atasan 2     :</td>
                            <td>{{ $pegawai->na2 }}</td>
                          </tr>
                          <tr>
                            <td>NIP Atasan 2      :</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Jabatan Atasan 2  :</td>
                            <td></td>
                          </tr>
                          <tr></tr>
                          <tr></tr>
                        </tbody>
                      </table>
                      <div>
                        <a href="#" class="btn btn-primary">Materi Coaching</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  @endsection