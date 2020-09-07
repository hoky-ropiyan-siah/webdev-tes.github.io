<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Artikel 
                </div>
                <div class="card-body">
                    <form action="" method="post">
                       
                    <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                    <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="deskripsi">deskripsi</label>
                            <textarea type="text" rows="5"  name="deskripsi" class="form-control" id="deskripsi"></textarea>
                            <form action="img" method="post" enctype="multipart/form-data">
                      
                        </div>
                        <div class="form-group">
                            <label for="upload">kategori</label>
                              <select name="kategori"  id="kategori" class="form-control">
                             <option value="">select menu</option>
                             <option value="pendikan">pendidikan</option>
                             <option value="kuliner">kuliner</option>
                               
                                  </select>
                            
                            <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
                        </div>
                       

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>