

    
    <!-- End of Sidebar -->

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Diskusi</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
           
            <div class="card-body">
              <div class="table-responsive">

              <div class="row mb-3">
                <div class="col-md-6">
                  <a href="<?= base_url(); ?>diskusi/tambah_dis" class="btn btn-primary">Diskusi
                Data</a>
               </div>
              </div>
              <?php
                
                $no = 1;
                foreach ($diskusi as $dis) {
                    ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="5" margin-top:5px;>
                
                  <tbody>
                <div>
                    <td><?= $dis->nama; ?><i class="far fa-comment-dots" style="float:right; font-size: 25px;" >&nbsp;<small style="font-size:15px;">1</small></i>
                   
                    <?= $dis->tanggal; ?>
                    
                       <p><?= $dis->deskripsi; ?></p>
                       <?= $dis->kategori; ?>
                       <br> <br>
                       <?= anchor('diskusi/hapus_dis/'.$dis->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div> ') ?>
                </div>

                </table>

                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      