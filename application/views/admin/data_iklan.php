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
                  <h3 >Data Iklan</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">

              <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;">
                  Tambah Kwitansi
              </button> -->
              

          
            
                <a href="<?= base_url() ?>admin/tambah_iklan" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Iklan</a>
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No</th>
                  <th>Judul Ikan</th>
                  <th>Ket Iklann</th>
                  <th>Gambar Iklan</th>
                  <th>Opsi</th>
                
                
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>
                 <?php foreach ($iklan as $data) { ?>
                <tr> 
                    
               
                   <td><?= $no++; ?></td>
                   
                    <td><?= $data['judul_iklan'] ?></td>
                    <td><?= $data['ket_iklan'] ?></td>
                    <td>
                     <img src="<?= base_url('assets_admin/iklan/') ?><?= $data['gambar'] ?>" alt="..." class="img-thumbnail" style="height: 70px;">
                    </td>
                     
                    <td>
                      <a href="<?= base_url('admin/edit-iklan/') ?><?= $data['kode_iklan'] ?>" class="btn btn-warning" style="color: white;">Edit</a>
                       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaldet<?= $data['id'] ?>" style="">
                        Detail
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
                            <form method="post" action="<?= base_url() ?>admin/hapus_iklan">
                                
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



                    </td>
                    
                   
                </tr>


 <!--   Modal Detail -->
            <div class="modal fade" id="modaldet<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Detail Data Iklan</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                  <style>
                    hr{
                      background-color: orange;
                    }
                  </style>

                  <label>Kode Iklan: </label>
                  <p> <?= $data['kode_iklan'] ?> </p>
                  <hr>

                  <label>Judul Iklan : </label>
                  <p> <?= $data['judul_iklan'] ?> </p>
                  <hr>

                  <label>Ket Iklan : </label>
                  <p> <?= $data['ket_iklan'] ?>  </p>
                    <hr>

                   <label>Mulai Iklan : </label>
                  <p> <?= $data['mulai_iklan'] ?>  </p>
                    <hr>

                     <label>Berakhir Iklan : </label>
                  <p> <?= $data['berakhir_iklan'] ?>  </p>
                    <hr>


                   <label>Gambar : </label>
                  <p> <img src="<?= base_url() ?>assets_admin/iklan/<?= $data['gambar'] ?>" style="height: 150px;">  </p>
                    <hr>


                   <label>Status : </label>
                  <p> <?= $data['status'] ?>  </p>
                    <hr>

                  

                  <label>Date Post : </label>
                  <p> <?= $data['date_post'] ?>  </p>
                  
                             
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>

                  </form>
              </div>
            </div>
          </div>

        <!-- Modal -->

    

        <!-- Modal -->
            

              <?php } ?>

                    
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Judul Ikan</th>
                  <th>Ket Iklann</th>
                  <th>Gambar Ikln</th>
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
