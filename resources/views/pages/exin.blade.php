@extends('layouts.template')
@section('content')
    <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="">
            <b>Exit Interview Form</b>
          </h1>
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
                <b>
                  <b>Nama Pegawai :</b>
                </b>
              </label>
              <input type="text" class="form-control" id="np"> </div>
            <div class="form-group">
              <label>
                <b>
                  <b>NIP :</b>
                </b>
              </label>
              <input type="number" class="form-control" id="nip"> </div>
          </form>
          <form class="">
            <div class="form-group">
              <label>
                <b>
                  <b>Tanggal Berakhir Bekerja :&nbsp;</b>
                </b>
              </label>
              <input type="date" class="form-control" id="jbt"> </div>
          </form>
        </div>
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>
                  <b>Nama Atasan :</b>
                </b>
              </label>
              <input type="text" class="form-control" id="np"> </div>
            <div class="form-group">
              <label>
                <b>
                  <b>NIP Atasan :</b>
                </b>
              </label>
              <input type="number" class="form-control" id="nip"> </div>
          </form>
          <form class="">
            <div class="form-group">
              <label>
                <b>
                  <b>Jabatan :</b>
                </b>
              </label>
              <input type="text" class="form-control" id="jbt"> </div>
          </form>
        </div>
      </div>
      <div class="row"> </div>
      <div class="row">
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>
                  <b>Tanggal Efektif Berhenti :
                    <br>(jika beda dari butir 3)&nbsp;</b>
                </b>
              </label>
              <input type="date" class="form-control" id="pk"> </div>
            <div class="form-group">
              <label></label>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <form class="">
            <div class="form-group">
              <label>
                <b>
                  <b>Unit Kerja :&nbsp;</b>
                </b>
                <br> </label>
              <input type="text" class="form-control" id="pk"> </div>
            <div class="form-group">
              <label></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead text-justify border-dark">
            <b>Kami mengucapkan terima kasih atas kinerja dan dedikasi Anda selama ini. Untuk membantu meningkatkan kualitas pengelolaan Human Capital di Bank Mandiri, kami sangat mengharapkan masukan Anda dengan menjawab beberapa pertanyaan berikut ini
              :&nbsp;</b>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <p class="m-3 text-left">
            <b>Apakah Anda bersedia menjadi anggota alumni pegawai Bank Mandiri :</b>
          </p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control w-25 m-3" id="nip" value="on">
          <p class="ya w-25 text-center m-3">Ya</p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control m-3 w-25" id="nip" value="on">
          <div class="col-md-12">
            <p class="tidak w-25 text-center m-0">Tidak</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="text-left col-md-7">
          <p class="text-justify p-3">
            <b>Apakah Anda bersedia untuk mengikuti survey oleh pihak independen terkait pengunduran diri Anda :</b>
          </p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control w-25 m-3" id="nip" value="on">
          <p class="ya w-25 text-center m-3">Ya</p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control m-3 w-25" id="nip" value="on">
          <div class="col-md-12">
            <p class="tidak w-25 text-center m-0">Tidak</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="">
            <b class="">Sebutkan alasan utama pengunduran diri Anda
              <b>(pilih salah satu)</b>
            </b>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 border">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
              <p class="lead text-center">
                <b>Jelaskan</b>
              </p>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border">
                  <div class="row">
                    <div class="">
                      <br> </div>
                    <div class="col-md-4">
                      <input type="checkbox" id="chek1" name="chk1" value="on">
                      <label for="chk1">KARIR</label>
                      <br> </div>
                    <div class="col-md-2  offset-md-2">
                      <textarea id="ck1" name="c1" cols="60" rows="8" style="resize: none;"></textarea>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="border">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="checkbox" id="chek2" name="chk2" value="on">
                      <label for="chk1">LINGKUNGAN KERJA</label>
                      <br> </div>
                    <div class="col-md-6 ">
                      <textarea id="ck2" name="c2" cols="60" rows="8" style="resize: none;"></textarea>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="border">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="checkbox" id="chek3" name="chk3" value="on">
                      <label for="chk1">ALASAN PRIBADI LAINNYA</label>
                      <br> </div>
                    <div class="col-md-6 ">
                      <textarea id="ck3" name="c3" cols="60" rows="8" style="resize: none;"></textarea>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="border">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="checkbox" id="chek4" name="chk4" value="on">
                      <label for="chk1" class="">FINANSIAL</label>
                      <br> </div>
                    <div class="col-md-6 ">
                      <textarea id="ck4" name="c4" cols="60" rows="8" style="resize: none;"></textarea>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="text-left col-md-7">
          <p class="text-justify p-3">
            <b>Apakah Anda tertarik untuk bekerja kembali di Bank Mandiri pada masa yang akan datang?&nbsp;</b>
          </p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control w-25 m-3" id="nip" value="on">
          <p class="ya w-25 text-center m-3">Ya</p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control m-3 w-25" id="nip" value="on">
          <div class="col-md-12">
            <p class="tidak w-25 text-center m-0">Tidak</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="text-left col-md-7">
          <p class="text-justify p-3">
            <b>Apakah Anda akan merekomendasikan Bank Mandiri kepada kerabat Anda sebagai tempat yang baik untuk bekerja?&nbsp;</b>
          </p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control w-25 m-3" id="nip" value="on">
          <p class="ya w-25 text-center m-3">Ya</p>
        </div>
        <div class="col-md-1">
          <input type="checkbox" class="form-control m-3 w-25" id="nip" value="on">
          <div class="col-md-12">
            <p class="tidak w-25 text-center m-0">Tidak</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="">
            <div class="form-group">
              <label>
                <b>Sebutkan hal baik yang menjadi pengalaman Anda bekerja di Bank Mandiri
                  <br> </b>Jelaskan:</label>
              <textarea id="na3" name="l3" cols="120" rows="8" style="resize: none;"></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>
              <b>Sebutkan hal baik yang perlu diperbaiki untuk meningkatkan
                <i>employee engagement</i>.
                <br> </b>Jelaskan:</label>
            <textarea id="na3" name="l3" cols="120" rows="8" style="resize: none;"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <a class="btn text-center btn-lg btn-success" href="#">Submit</a>
        </div>
      </div>
    </div>
  </div>
@endsection