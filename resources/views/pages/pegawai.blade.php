@extends('layouts.template')

@section('content')
<div class="py-5">
  <div class="container">
    <div class="row">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- ini buat title halaman -->
      <title>Data Pegawai</title>
      <!-- ini buat memasukkan CSS Bootstrap sob -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <div class="container">
          <div class="modal-dialog" role="document"> </div>
          <h1 class="mx-auto">Data Pegawai</h1>
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">NIP</th>
                <th class="text-center">Jabatan</th>
                <th> </th>
                <th> </th>
                <th> </th>
              </tr>
              @forelse ($pegawai as $data)
              <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>
                  <a href="{{ action('TambahdataController@edit', $data->id) }}" class="btn btn-success">Edit</a>
                <form action="{{ action('TambahdataController@destroy', $data->id) }}" method="post">
                  <input name="_method" value="DELETE" type="hidden">
                <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                  <a href="{{ route('pegawai.show', ['nip' => $data->nip]) }}" class="btn btn-primary">Lihat data</a>
              </tr>
              @empty
              <h3>Data Masih Kosong</h3>
              @endforelse
            </thead>
            <tbody> </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection