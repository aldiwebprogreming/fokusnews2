 <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="<?= base_url('assets/images/logo2.png') ?>" class="footer-logo" alt=""  style="height: 50px;" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Kecepatan menyampaikan dan menerima informasi/berita  menjadi tantantan tersendiri bagai media massa. Namun, kecepatan dalam menyampaikan berita kadang tidak diimbangi oleh akurasi. Berita dan hoax acap bercampur aduk, sehingga pembaca dirugikan.
                  </h5>

                   <?php 

                    $sosial = $this->db->get('tbl_sosial_media')->row_array();
                   ?>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="<?= $sosial['facebook'] ?>">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="<?= $sosial['youtube'] ?>">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="<?= $sosial['instagram'] ?>">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                  <?php 

                    $this->db->order_by("id", "desc");
                    $query = $this->db->get('tbl_post',3)->result_array();
                      foreach ($query as $data) {
                     ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          
                          <div class="col-3">
                            <img
                              src="<?= base_url() ?>assets_admin/img/<?= $data['images'] ?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              <?= $data['judul_berita'] ?>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php } ?>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2 pt-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="<?= base_url() ?>assets/images/dashboard/home_2.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <div>
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="<?= base_url() ?>assets/images/dashboard/home_3.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600 mb-3">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
               <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">Informasi</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-0 font-weight-600"><a href="<?= base_url('informasi/tentang-kami') ?>">Tentang Kami</a></h6>
                      
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-0 font-weight-600"><a href="<?= base_url('informasi/redaksi') ?>">Redaksi</a></h6>
                      
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-0 font-weight-600"><a href="<?= base_url('informasi/pedoman-media') ?>">Pedoman Media Siber</a></h6>
                      
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-0 font-weight-600"><a href="<?= base_url('informasi/discalaimer') ?>">Desclaimer</a></h6>
                      
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-0 font-weight-600"><a href="<?= base_url('informasi/info-iklan') ?>"> Info Iklan</a></h6>
                      
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-0 font-weight-600"><a href="<?= base_url('informasi/karir') ?>">Karir</a></h6>
                      
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          
         <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2021 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> Fokusnews</a>. All rights reserved.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">nusadigital</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="<?= base_url() ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?= base_url() ?>/assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?= base_url() ?>/assets/js/demo.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
