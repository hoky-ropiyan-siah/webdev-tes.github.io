<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="5" margin-top:5px;>
                  <?php
                $no = 1;
                foreach ($diskusi as $dis) {
                    ?>
                <div>
                    <td><?= $dis->judul; ?><i class="far fa-comment-dots" style="float:right; font-size: 25px;"></i></td>
                </div>

                <?php } ?>
                </table>
