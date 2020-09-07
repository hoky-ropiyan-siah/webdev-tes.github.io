<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah 
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                       
                    <div class="form-group">
                            <label for="judul">judul</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                    <div class="form-group">
                            <label for="gambar">gambar</label>
                        <input type="file" name="gambar" size="50" />
                        </div>
                        
                        <div class="form-group">
                            <label for="deskripsi">deskripsi</label>
                            <textarea type="text" rows="5" action="upload_file.jpg" name="deskripsi" class="form-control" id="deskripsi"></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                       
                    
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>