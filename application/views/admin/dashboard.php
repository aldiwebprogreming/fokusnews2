  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.print.css' rel='stylesheet' media='print' />


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
    <!--   <?= $this->session->flashdata('hello'); ?> -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <?php 
            if ($this->session->rule == 'Admin') {?>\

            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Hello <?= $this->session->username ?></h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
          </div>
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="nof"><?= $jml_berita ?></h3>

                <p>Jumlah Post Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-user"></i>
              </div>
              <a href="<?= base_url('admin/data_post') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        <?php }else{ ?>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="nof"><?= $jml_berita ?></h3>

                <p>Jumlah Post Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-user"></i>
              </div>
              <a href="<?= base_url('admin/data_post') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="nof"><?= $jml_video ?></h3>

                <p>Jumlah Post Video</p>
              </div>
              <div class="icon">
                <i class="ion ion-user"></i>
              </div>
              <a href="<?= base_url('admin/data_video') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3 id="nof"><?= $jml_admin ?></h3>

                <p>Jumlah Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-user"></i>
              </div>
              <a href="<?= base_url('admin/data_admin') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        <?php } ?>

          

          

         
         
          <!-- card pengunjung hari ini -->
           <div class="col-lg-6 col-6" id="pengunjunghariini">
              

                <div class="container">
                  
                  <div class="calendar-wrapper" style="margin-bottom: 40px; background-color: silver;"></div>
                </div>
           
           </div>

           <!-- end card -->

          <!-- card jumlah pengunjung-->
          <div class="col-lg-6 col-6" id="jumlahpengunjung">
              
          </div>
          <!-- end card -->

          <!-- card visitor online -->
          <div class="col-lg-6 col-6" id="online">
            
            
          </div>


          <!-- end card -->




            <!-- /.card -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <script src="http://momentjs.com/downloads/moment.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- kalender -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
