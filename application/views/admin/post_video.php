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
                  <h3 ><strong>Upload Video</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                    <form method="POST" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Judul</label>
                            <input type="text" class="form-control" name="judul_post" value=""  placeholder="Masukan judul video">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan</label>
                            <textarea class="form-control" name="keterangan_post" placeholder="Masukan keterangan"></textarea>
                            
                          </div>

                           

                           <div class="form-group">
                            <label>Link video</label>
                            <input type="text" name="link"  class="form-control" required="" placeholder="Masukan link video">
                          </div>

                        
                          <input type="submit" name="kirim" class="btn btn-primary" value="Upload video">
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
  

<script src="<?php echo base_url() ?>assets_admin/alert.js"></script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

 <script>
        CKEDITOR.replace( 'keterangan_post' );
 </script>

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
