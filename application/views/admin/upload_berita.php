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
                  <h3 ><strong>Upload Berita</strong></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8">
                    <form method="POST" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" value=""  placeholder="Masukan judul berita">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Isi Berita</label>
                            <textarea class="form-control" name="isi_berita" placeholder="Masukan isi berita"></textarea>
                            
                          </div>

                           <div class="form-group">
                            <label>Kategori Berita</label>
                            <select class="form-control" name="kategori_berita">
                              <option>--Pilih Kategori berita</option>
                              <option value="Berita">Berita</option>
                              <option value="Nasional">Berita Nasional</option>
                              <option value="daerah">Berita Daerah</option>
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
                            <input type="file" name="gambar"  class="form-control" required="">
                          </div>

                        
                          <button type="submit" class="btn btn-primary mt-3">Upload Berita</button>
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
        CKEDITOR.replace( 'isi_berita' );
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
