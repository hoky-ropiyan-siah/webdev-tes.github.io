

    
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
                foreach ($galery as $gal) 
                {
                    ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="5" margin-top:5px;>
                  <tbody>
                
               <div>
                    <td>
                    <?= $gal->judul; ?>
                   <p> 
                   <img src="<?php echo base_url(); ?>assets/img/<?= $gal->gambar; ?>">
                     <br> <br>
                   <!-- Button trigger modal -->
                   
<button type="button" class="btn btn-primary btn" style="font-size:18px;" data-toggle="modal" data-target="#exampleModal"><i class="far fa-comment-dots"></i></button>
 
<button type="button" class="btn btn-danger btn-sm" style="font-size:8px;" ><?= anchor('galery/hapus_gal/'.$gal->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div> ') ?></button>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?= $gal->deskripsi; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

                   </p>
                  </td>
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

      
<script>
    var loadPhoto = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
        var outputPhoto = document.getElementByid('outputPhoto');
        outputPhoto.src = reader.result;
    };
    reader.readAsDataUrl(event.target.files[0]);
    };
</script>