

    
    <!-- End of Sidebar -->

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Document</h1>
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
           
            <div class="card-body">
              <div class="table-responsive">
            
              <div class="row mb-3">
                <div class="col-md-6">
                  <a href="<?= base_url(); ?>document/tambah_doc" class="btn btn-primary">Tambah
                Data</a>
               </div>
              </div>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="5" margin-top:5px;>
                  <thead>
                    <tr>
                    <th scope="col">no</th>
                       <th scope="col">document</th>
                       <th scope="col">tanggal</th>
                       <th scope="col">upload</th>
                       <th scope="col">action</th>
                    </tr>
                  </thead>
                  <tbody>
               <?php
                $no = 1;
                foreach ($document as $doc) {
                    ?>
                
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $doc->document; ?></td>
                    <td><?= $doc->tanggal; ?></td>
                    <td><?= $doc->upload; ?></td>
                    <td>
                        <?= anchor('document/hapus_doc/'.$doc->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div> ') ?>
                        <?= anchor('document/download_doc/'.$doc->document, '<div class="btn btn-info btn-sm"><i class="fa fa-download"></i></div> ') ?>
                        
                       
                    </td>
                    
                </tr>
            <?php } ?>
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        </div>
        <!-- /.container-fluid -->


      