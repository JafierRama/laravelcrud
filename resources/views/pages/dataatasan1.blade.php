@extends('layouts.template')
@section('content')
<title>Data Atasan</title>
<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="">Data Atasan</h1>
      </div>
    </div>
  </div>
</div>
<div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="btn-group">
          <a href="{{ route('atasan1') }}" class="btn btn-primary">Atasan 1</a>
          <a href="{{ route('atasan2') }}" class="btn btn-primary">Atasan 2</a>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </div>
  </div>
</div>
<div class="tabel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($atasan as $item1)
            <tr>
              <td>{{ $item1->id }}</td>
              <td>{{ $item1->nama }}</td>
              <td>{{ $item1->nip }}</td>
              <td>{{ $item1->jabatan }}</td>
            </tr>                 
            @empty
            <tr>
              <td><h3>Data Atasan 1 Masih Kosong</h3></td>
            </tr>
            @endforelse
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection