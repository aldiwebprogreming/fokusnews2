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
                  <h3 ><strong>Ubah Password Anda</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                         <form method="POST" action="">
                              <div class="form-group">
                              <label for="exampleInputEmail1">Password Lama</label>
                              <input type="password" class="form-control" name="pass_lama" value="" required="" placeholder="Masukan password lama anda">
                              
                            </div>
                    

                               <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" name="pass1"  class="form-control" required="" placeholder="Mauskan password">
                                <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>

                              <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="pass2"  class="form-control" required="" placeholder="Masukan konfirmasi password">
                                <?= form_error('pass2', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>

                              <button type="submit" class="btn btn-primary mt-3">Ubah Password</button>
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
