

    
    <!-- End of Sidebar -->

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Galery</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
           
            <div class="card-body">
              <div class="table-responsive">
            
              <div class="row mb-3">
                <div class="col-md-6">
                  <a href="<?= base_url(); ?>galery/tambah_gal" class="btn btn-primary">Tambah
                gambar</a>
               </div>
              </div>
              <?php
                
                $no = 1;
                foreach ($galery as $gal) {
                    ?>

              
                  <tbody>
                
               <div >
                    <td>
                    <?= $gal->judul; ?><i class="fas fa-folder-open" style="float:right; font-size: 25px;" >&nbsp;<small style="font-size:15px;">1</small></i>
                   <p> <?= $gal->gambar; ?>

                   <?= anchor('<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div> ') ?>
                   
                   </p>
                  </td>
                </div>
                
                <?php } ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      