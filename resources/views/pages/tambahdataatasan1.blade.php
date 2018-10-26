@extends('layouts.template')
@section('content')
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit</button>
 <form action="{{ action('Tambahdataa1Controller@edit', $data->id) }}" method="POST" role="form" class="form-horizontal">
 {{ csrf_field() }}
<div class="form-group">
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

<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-sm">
            Submit</button>

   </div>
</div>
</form>
@endsection