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
          <a href="{{ route('atasan1.index') }}" class="btn btn-primary">Atasan 1</a>
          <a href="{{ route('atasan2') }}" class="btn btn-primary">Atasan 2</a>
        </div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#atasan1">
          Tambah
        </button>
        
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($atasan as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->nip }}</td>
              <td>{{ $item->jabatan }}</td>
              <td>
                <button onclick="editForm({{ $item->id }})" class="btn btn-icons btn-rounded btn-outline-warning" title="Edit Data" data-toggle="modal" data-target="#editatasan1"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData({{ $item->id }})" data-url="{{ route('atasan1.destroy', $item->id) }}" id="url-delete" class="btn btn-icons btn-rounded btn-outline-danger" title="Delete Data"><i class="fa fa-trash-o"></i></button>
              </td>
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
@include('pages.atasan1.create')
@include('pages.atasan1.edit')
@endsection
@push('js')
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  function deleteData(id){
    var url_delete = $('#url-delete').data('url');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    
    
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url : url_delete,
          type : "POST",
          data : {'_method' : 'DELETE', '_token' : csrf_token},
          success : function(data) {
            setTimeout(location.reload.bind(location), 2000);
            swal(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
          }
        });
      } else {
        swal("Your Data is safe!");
      }
    });
  }
  
  function editForm(id) {
    save_method = 'edit';
    $('input[name=_method]').val('PATCH');
    $.ajax({
      url: "{{ url('atasan1') }}" + '/' + id + "/edit",
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        $('#id').val(data.id);
        $('#nama').val(data.nama);
        $('#nip').val(data.nip);
        $('#jabatan').val(data.jabatan);
      },
      error : function() {
        alert("Nothing Data");
      }
    });
  }
</script>
@endpush