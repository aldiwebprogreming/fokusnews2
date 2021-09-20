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
                  <h3 ><strong>Edit Iklan</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                    <form method="POST" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Judul Iklan</label>
                            <input type="text" class="form-control" name="judul"  placeholder="Masukan judul iklan"  required="" value="<?= $data['judul_iklan'] ?>">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan Iklan</label>
                            <textarea class="form-control" name="ket_iklan" placeholder="Masukan keterangan iklan" required=""><?= $data['ket_iklan'] ?></textarea>
                            
                          </div>

                           
                           <div class="form-group">
                            <label>Gambar Iklan</label>
                            <input type="file" name="gambar" placeholder="Masukan gambar iklan"  class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label>Mulai Iklan</label>
                            <input type="date" name="mulai_iklan" value="<?= $data['mulai_iklan'] ?>"  class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label>Berakhir Iklan</label>
                            <input type="date" name="berakhir_iklan" value="<?= $data['berakhir_iklan'] ?>"  class="form-control" required="">
                          </div>

                        
                          <input type="submit" name="edit" class="btn btn-primary mt-3" value="Edit Iklan">
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
