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
                  <h3 ><strong>Edit Sosial Media</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                         <form method="POST" action="">
                              <div class="form-group">
                                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                <label for="exampleInputEmail1">Link Facebook</label>
                                <input type="text" class="form-control" name="facebook" value="<?= $data['facebook'] ?>" required="" placeholder="Masukan link facebook" required="">
                                
                              </div>
                              
                              <div class="form-group">
                                <label for="exampleInputEmail1">Link Instagram</label>
                                <input type="text" class="form-control" name="instagram" value="<?= $data['instagram'] ?>"  placeholder="Masukan link instagram"  required="">
                                
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Link Youtube</label>
                                <input type="text" class="form-control" name="youtube" value="<?= $data['youtube'] ?>"  placeholder="Masukan link youtube" required="">
                                
                              </div>
                        
                                <input type="submit" name="kirim" class="btn btn-primary" value="Edit Data">
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
