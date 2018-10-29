<div class="modal fade" id="atasan1" tabindex="-1" role="dialog" aria-labelledby="Tambah Data Atasan 1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Atasan 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('atasan1.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nip:</label>
                        <input type="text" class="form-control" name="nip">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jabatan:</label>
                        <input type="text" class="form-control" name="jabatan">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="atasan1submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</div>

