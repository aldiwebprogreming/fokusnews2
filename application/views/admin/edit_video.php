  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 ><strong>Edit Video</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                    <form method="POST" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Judul</label>
                            <input type="text" class="form-control" name="judul_post" value="<?= $video['judul_post'] ?>"  placeholder="Masukan judul video">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan</label>
                            <textarea class="form-control" name="keterangan_post" placeholder="Masukan keterangan"><?= $video['keterangan_post'] ?></textarea>
                            
                          </div>

                           

                           <div class="form-group">
                            <label>Preview Video</label><br>
                            <?= $video['link'] ?>
                          </div>

                          <div class="form-group">
                            <label>Link video</label>
                            <textarea class="form-control" name="link"><?= $video['link'] ?></textarea>
                          </div>

                        
                          <input type="submit" name="edit" class="btn btn-primary" value="Edit video">
                        </form>
                </div>
              </div>

            
               </div>
            </div>
          </div>         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.conte
      <td><</td>nt -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <script>
        CKEDITOR.replace( 'keterangan_post' );
 </script>

<script src="<?php echo base_url() ?>assets_admin/alert.js"></script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    
    $(document).ready(function(){
      $("#submitaktif").click(function(){
     
        $("#load1").show();
       
      })

       $("#submit2").click(function(){
     
        $("#load2").show();
       
      })


    })

</script>
  <!-- <script>

   // function tambah(){
   //  $("#tambah").click(function(){

   //    swal("Maaf!", " promo tidak dapat ditambah", "error");
   //  })
   // }
  </script> -->