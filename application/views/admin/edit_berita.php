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
                  <h3 ><strong>Edit Berita</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                    <form method="POST" action="<?= base_url() ?>admin/act_editberita" enctype="multipart/form-data">
                      <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="hidden" class="form-control" name="kode_berita" value="<?= $data['kode_berita'] ?>" >
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" value="<?= $data['judul_berita'] ?>" >
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Isi Berita</label>
                            <textarea class="form-control" name="isi_berita"><?= $data['isi_berita'] ?></textarea>
                            
                          </div>

                           <div class="form-group">
                            <label>Kategori Berita</label>
                            <select class="form-control" name="kategori_berita">
                              <option>--Pilih Kategori berita--</option>
                              <option>Berita</option>
                              <option>Politik</option>
                              <option>Bisnis</option>
                              <option>Sejarah</option>
                              <option>Olahraga</option>
                              <option>Budaya</option>
                              <option>Wisata</option>
                              <option>Teknologi</option>
                            </select>
                          </div>

                           <div class="form-group">
                            <label>Gambar Berita</label>
                            <input type="file" name="gambar"  class="form-control">
                          </div>

                          <img src="<?= base_url() ?>assets_admin/img/<?= $data['images'] ?>" style="height: 100px;"><br>

                        
                          <button type="submit" class="btn btn-primary mt-3">Edit Berita</button>
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
        CKEDITOR.replace( 'isi_berita' );
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
