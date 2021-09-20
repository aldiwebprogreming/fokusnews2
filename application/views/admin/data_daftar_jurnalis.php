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
                  <h3 >Data Calon Jurnalis </h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">

              <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;">
                  Tambah Kwitansi
              </button> -->
              

          
            
               <!--  <a href="<?= base_url() ?>admin/sosial_media" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Sosial Media</a> -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat Lengkap</th>
                  <th>Tempat Lahir</th>
                 <th>Status</th>
                  <th>Opsi</th>
                
                
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>
                 <?php foreach ($daftar as $data) { ?>
                <tr> 
                    
               
                   <td><?= $no++; ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['tempat_lahir'] ?></td>
                    <td>
                      <?php 
                        if ($data['status'] == 0) {
                          echo '<label class="badge badge-warning">Belum disetujui</label>';
                        }
                       ?>
                    </td>
                     
                    <td>
                     <!--  <a href="<?= base_url('admin/edit-sosial-media/') ?><?= $data['id'] ?>" class="btn btn-warning" style="color: white;">Edit</a> -->
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModaldet<?= $data['id'] ?>">
                       Detail
                      </button>

                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalsetuju<?= $data['id'] ?>">
                       Menyetujui
                      </button>
                        
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalhps<?= $data['id'] ?>">
                       Hapus
                      </button>

                       <!-- Modal -->
                      <div class="modal fade" id="exampleModalhps<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <h4>Apakah anda ingin menghapus data ini ?</h4>
                            <form method="post" action="<?= base_url() ?>admin/hapus_calon_jurnalis">
                                
                                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">OK</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                        <!-- Modal -->
                      <div class="modal fade" id="exampleModalsetuju<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <h4>Apakah anda ingin menyetujuinya?</h4>
                            <form method="post" action="<?= base_url() ?>admin/act_setuju_jurnalis">
                                
                                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                <input type="hidden" name="email" value="<?= $data['email'] ?>">
                                <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
                                <input type="hidden" name="kode_user" value="<?= $data['kode_jurnalis'] ?>">

                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">OK</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>



                      <div class="modal fade" id="exampleModaldet<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><strong>Detail</strong></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            
                            <label>Nama</label><br>
                            <p><?= $data['nama'] ?></p>
                            <hr>

                            <label>Alamat</label><br>
                            <p><?= $data['alamat'] ?></p>
                            <hr>

                            <label>Jenie Kelamin</label><br>
                            <p><?= $data['jk'] ?></p>
                            <hr>

                            <label>Tempat Lahir</label><br>
                            <p><?= $data['tempat_lahir'] ?></p>
                            <hr>

                            <label>Tanggal Lahir</label><br>
                            <p><?= $data['tgl_lahir'] ?></p>
                            <hr>

                            <label>Email</label><br>
                            <p><?= $data['email'] ?></p>
                            <hr>

                            <label>No Telp/WA</label><br>
                            <p><?= $data['no_telp'] ?></p>
                            <hr>

                            <label>Gambar KTP</label><br>
                            <img src="<?= base_url('jurnalis/')?><?= $data['ktp'] ?>" style="height: 100px;">
                            <hr>

                            <label>Gambar FOTO</label><br>
                            <img src="<?= base_url('jurnalis/')?><?= $data['foto'] ?>" style="height: 100px;">
                            <hr>




                            
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                            </div>
                          </div>
                        </div>
                      </div>



                    </td>
                    
                   
                </tr>


 

              <?php } ?>

                    
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat Lengkap</th>
                  <th>Tempat Lahir</th>
                  <th>Status</th>
                  <th>Opsi</th>
                
                </tr>
                </tfoot>
              </table>
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
