@extends('layouts.template')

@section('content')
<title>Tambah Data Pegawai</title>
    <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="py-2">Tambah Data Pegawai Coaching</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="">
            <b>Isi data pegawai anda disini :</b>
          </p>
        </div>
      </div>
    </div>
  </div>
  <form action="{{ route('pegawai.store') }}" method="post">
    {{ csrf_field() }}
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>
                <b>Nama Pegawai :</b>
              </label>
              <input type="text" class="form-control" name="np"> </div>
            <div class="form-group">
              <label>
                <b>NIP :</b>
              </label>
              <input type="number" class="form-control" name="nip"> </div>
            <div class="form-group">
              <label>
                <b>Jabatan :</b>
              </label>
              <input type="text" class="form-control" name="jbt"> </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>
                <b>Periode Kerja :</b>
              </label>
              <input type="text" class="form-control" name="pk"> </div>
            <div class="form-group">
              <label>
                <b>Unit Kerja :</b>
              </label>
              <input type="text" class="form-control" name="uk"> </div>
            <div class="form-group">
              <label>
                <b>Group / Direktorat :</b>
              </label>
              <input type="text" class="form-control" name="gd"> </div>
          </div>
        </div>
        <div class="row"> </div>
      </div>
    </div>
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>
                <b>Nama Atasan 1&nbsp;</b>
              </label>
              <br><select name="na1"><option value="Sr.SMR Risk Manager">Sr.SMR Risk Manager</option>
              <option value="SSRM">SSRM</option>
              </select>
              </div>
              <div class="form-group">
              <label>
                <b>NIP</b>
              </label>
              <input type="text" class="form-control" name="nip1"> </div>
            <div class="form-group">
              <label>
                <b>Jabatan</b>
              </label>
              <input type="text" class="form-control" name="jbt1"> </div>
            <div class="col-md-6">
              <div class="form-group">
               <label>
                <b>Nama Atasan 2&nbsp;</b>
              </label>
              <select name="na2"><option value="Sr.SMR Risk Manager">Sr.SMR Risk Manager</option>
              <option value="SSRM">SSRM</option></select>
              </div>
             <div class="form-group">
              <label>
                <b>NIP</b>
              </label>
              <input type="text" class="form-control" name="nip2"> </div>
            <div class="form-group">
              <label>
                <b>Jabatan</b>
              </label>
              <input type="text" class="form-control" name="jbt2"> </div>
           </div>
          
        </div>
        <div class="row"> </div>
      </div>
    </div>
     <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  </form> 
 
  <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Materi Coaching</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">Isi Materi Coaching anda disini :&nbsp;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>1. Pemahaman mengenai legalitas usaha</b>
              </label>
              <textarea id="no1" name="k1" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
              <label>
                <b>2. Kesesuaian dengan Risk Acceptance Criteria (RAC)</b>
              </label>
              <textarea id="no2" name="k2" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>3. Pendalaman mengenai pola usaha calon debitur</b>
              </label>
              <textarea id="no3" name="k3" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
              <label>
                <b>4. Penentuan struktur pembiayaan</b>
              </label>
              <textarea id="no4" name="k4" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>5. Kewajaran laporan keuangan</b>
              </label>
              <textarea id="no5" name="k5" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
              <label>
                <b>6. Kelayakan dan legalitas agunan</b>
              </label>
              <textarea id="no6" name="k6" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>7. Rekomendasi beserta mitigasi risiko (covenant)</b>
              </label>
              <textarea id="no7" name="k7" cols="60" rows="8" style="resize: none;"></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
        <div class="col-md-12">
            <div class="form-group">
              <label>
                <b>Lesson Learned : </b>
              </label>
              <textarea id="na1" name="l2" cols="120" rows="8" style="resize;"></textarea>
            </div>
            <div class="form-group">
              <label>
                <b>Faktor Pendukung Kerja</b> : (merupakan faktor pendukung yang dibutuhkan dalam proses penyelesaian pekerjaan, antara lain Data maupun Sumber daya )</label>
              <textarea id="na2" name="l2" cols="120" rows="8" style="resize: none;"></textarea>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
              <label>
                <b>Tindakan selanjutnya terkait dengan pelaksanaan kerja Pegawai </b>:</label>
              <textarea id="na3" name="l3" cols="120" rows="8" style="resize: none;"></textarea>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection