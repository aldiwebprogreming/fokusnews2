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
                  <h3 >Profil Anda</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">

             <label>Nama Lengkap</label><br>
             <p><?= $data['nama'] ?></p>
             <hr>

            <label>Nama Alamat</label><br>
             <p><?= $data['alamat'] ?></p>
             <hr>

              <label>Jenis Kelamin</label><br>
             <p><?= $data['jk'] ?></p>
             <hr>

            <label>Tempat Lahir</label><br>
             <p><?= $data['tempat_lahir'] ?></p>
             <hr>

            <label>Tgl Lahir</label><br>
             <p><?= $data['tgl_lahir'] ?></p>
             <hr>

            <label>No Telp/WA</label><br>
             <p><?= $data['no_telp'] ?></p>
             <hr>

            <label>Email</label><br>
             <p><?= $data['email'] ?></p>
             <hr>

             <label>Foto</label><br>
              <img src="<?= base_url('jurnalis/') ?><?= $data['foto'] ?>" style="height: 100px;">
             <hr>
            
              
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
