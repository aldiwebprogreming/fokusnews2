<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=612a1f38f4d23f00121c6e67&product=inline-share-buttons" async="async"></script>



        <!-- partial -->
      
        <div class="content-wrapper">
          <div class="container">
            
          
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <small class="badge badge-primary">Post <?= $detail['kategori_berita'] ?></small><br>
                         <small class="mt-3"><i class="far fa-calendar-minus"></i> Dipost: <?= $detail['date'] ?></small>

                        <div class="card-title">
                          <h2><strong><?= $detail['judul_berita'] ?></strong></h2>
                        </div>
                        <div class="row">
                          
                          <div class="col-sm-12 grid-margin">

                              <div class="position-relative">
                             
                              <div class="rotate-img">
                                
                                <img src="<?= base_url() ?>assets_admin/img/<?= $detail['images'] ?>" class="img-fluid" alt="...">
                                
                              </div>
                              <div id="share" class="mt-3 text-primary"><strong>Bagikan Berita :</strong> <div class="sharethis-inline-share-buttons"></div></div>

                              <div id="isi" class="mt-3">
                                <?= $detail['isi_berita'] ?>
                              </div>
                            </div>

                            <div id="share" class="mt-3 text-primary"><strong>Bagikan Berita :</strong> <div class="sharethis-inline-share-buttons"></div></div>

                          </div>

                            <div class="fb-comments" data-href="http://localhost/fokusnews" data-width="500" data-numposts="5"></div>

                         
                        </div>


                        <!-- <div class="row">
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="assets/images/dashboard/home_9.jpg"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <span
                                    class="badge badge-danger font-weight-bold"
                                    >Lifestyle</span
                                  >
                                  <div class="video-icon">
                                    <i class="mdi mdi-play"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="assets/images/dashboard/home_10.jpg"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <span
                                    class="badge badge-danger font-weight-bold"
                                    >National News</span
                                  >
                                  <div class="video-icon">
                                    <i class="mdi mdi-play"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <div class="col-lg-4">
                        
                       <div class="card" style="margin-top: 100px; margin-bottom: 40px;">
                        <label class="badge badge-primary" style="width: 100px; position: absolute; left: 7px; margin-top: 9px;">Berita Terbaru</label>
                        <img src="<?= base_url() ?>assets_admin/img/<?= $berita_baru['images'] ?>" class="card-img-top img-fluid" alt="...">
                        
                         <h3 class="mt-3"><a href="<?= base_url('news/') ?><?= $berita_baru['kategori_berita'] ?>/<?= $berita_baru['slug'] ?>" class="text-dark"><?= $berita_baru['judul_berita'] ?></a></h3>
                          <small class=""><i class="far fa-calendar-minus"></i> Dipost: <?= $berita_baru['date'] ?>
            
                      </div>

                      <hr>

                      

                    <div class="card" style="margin-top: 30px; margin-bottom: 40px;">
                        <label class="badge badge-primary" style="width: 100px; position: absolute; left: 7px; margin-top: 9px;">Berita Terbaru</label>
                        <img src="<?= base_url() ?>assets_admin/img/<?= $berita_baru2['images'] ?>" class="card-img-top img-fluid" alt="...">
                        
                         <h3 class="mt-3"><a href="<?= base_url('news/') ?><?= $berita_baru2['kategori_berita'] ?>/<?= $berita_baru2['slug'] ?>" class="text-dark"><?= $berita_baru2['judul_berita'] ?></a></h3>
                          <small class=""><i class="far fa-calendar-minus"></i> Dipost: <?= $berita_baru2['date'] ?>
            
                      </div>

                      <hr>

                      <div class="card-title">
                            Iklan
                       </div>

                      <div class="card" style="margin-top: 30px; margin-bottom: 60px; ">
                        <label class="badge badge-success" style="width: 50px; position: absolute; left: 7px; margin-top: 9px;">Iklan</label>
                        <img src="<?= base_url() ?>assets_admin/iklan/iklan.jpeg" class="card-img-top img-fluid" alt="...">
                        
                         <!-- <h3 class="mt-3"><?= $berita_baru['judul_berita'] ?></h3>
                          <small class=""><i class="far fa-clock"></i> Dipost 3 menit yang lalu</small> -->
            
                      </div>

                      <hr>

                      <div class="card-title">
                          Foto Berita
                      </div>

                      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <?php 
                          $no = 1;
                          foreach ($foto as $foto2) { ?>
                            <?php if ($no == 1) { ?>
                          <div class="carousel-item active">
                          <img src="<?= base_url() ?>assets_admin/img/<?= $foto2['images'] ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5><a href="<?= base_url('news/') ?><?= $foto2['kategori_berita'] ?>/<?= $foto2['slug'] ?>" style="color: white"><?= $foto2['judul_berita'] ?></a></h5>
                              <!-- <p>Some representative placeholder content for the first slide.</p> -->
                            </div>
                          </div>
                          <?php }else{ ?>

                            <div class="carousel-item">
                          <img src="<?= base_url() ?>assets_admin/img/<?= $foto2['images'] ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                               <h5><a href="<?= base_url('news/') ?><?= $foto2['kategori_berita'] ?>/<?= $foto2['slug'] ?>" style="color: white"><?= $foto2['judul_berita'] ?></a></h5>
                              <!-- <p>Some representative placeholder content for the first slide.</p> -->
                            </div>
                          </div>
                          <?php } $no++; ?>
                        <?php } ?>
                          
                          <!-- <div class="carousel-item">
                            <img src="<?= base_url() ?>assets_admin/img/sejarah2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                      
                      <hr>

                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="card-title">
                            Berita Lainya
                          </div>
                          <p class="mb-3">See all</p>
                        </div>

                        <?php foreach ($berita_lainya as $det) { ?>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?= base_url() ?>assets_admin/img/<?= $det['images'] ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                         <h4 class="font-weight-600 mb-0">
                           <a href="<?= base_url('news/') ?><?= $det['kategori_berita'] ?>/<?= $det['slug'] ?>" style="color: black"><?php  echo substr($det['judul_berita'],0,30)."....";?></a>
                          </h4>
                        </div>

                      <?php } ?>

                     

                      

                        
                      

                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row" data-aos="fade-up">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="card-title">
                          Berita Olahraga
                          <hr>
                        </div>
                        <div class="row">
                          <div class="col-xl-6 col-lg-8 col-sm-6">
                            <div class="rotate-img">
                              <img
                                src="<?= base_url() ?>assets_admin/img/<?= $olahraga['images'] ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                            <h2 class="mt-3 text-primary mb-2"><a class="text-dark" href="<?= base_url('news/') ?><?= $olahraga['kategori_berita'] ?>/<?= $olahraga['slug'] ?>">
                              <?= $olahraga['judul_berita'] ?> </a>
                            </h2>
                            <p class="fs-13 mb-1 text-muted">
                              <span class="mr-2"><i class="fas fa-calendar-minus"></i> Dipost:</span><?= $olahraga['date'] ?> / <a href="" class="badge badge-primary"><?= $olahraga['kategori_berita'] ?></a>
                            </p>


                            
                          </div>


                          
                          <div class="col-xl-6 col-lg-4 col-sm-6">
                            <?php foreach ($olahraga2 as $ol) { ?>

                            <div class="border-bottom pb-3 mb-3">
                              <h3 class="font-weight-600 mb-0">
                                <?= $ol['judul_berita'] ?>
                              </h3>
                              <p class="mb-0">
                                <a href="<?= base_url('news/') ?><?= $ol['kategori_berita'] ?>/<?= $ol['slug'] ?>" class="">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2"><i class="far fa-calendar-minus"></i></span>Dipost: <?= $ol['date'] ?>
                              </p>
                              
                            </div>

                          <?php } ?>

                            <!-- <div class="border-bottom pb-3 mb-3">
                              <h3 class="font-weight-600 mb-0">
                                Real Madrid Kalah Dalam Liga Champions
                              </h3>
                              <p class="mb-0">
                                <a href="" class="">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2"><i class="far fa-clock"></i></span>10 Minutes ago
                              </p>
                            </div>
                            <div class="border-bottom pb-3 mb-3">
                              <h3 class="font-weight-600 mb-0">
                                Arsenal Resmi Memperkenalkan Pemain Barunya Didepan Suporter MU
                              </h3>
                              <p class="mb-0">
                                <a href="" class="">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2"><i class="far fa-clock"></i></span>10 Minutes ago
                              </p>
                            </div>
                            <div>
                              <h3 class="font-weight-600 mb-0">
                                Persipura Kalah Dengan Persita Tangerang 2-1
                              </h3>
                               <p class="mb-0">
                                <a href="" class="">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2"><i class="far fa-clock"></i></span>10 Minutes ago
                              </p>
                            </div> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card-title">
                              Berita Wisata
                              <hr>
                            </div>
                            <?php foreach ($wisata as $wst) {?>
                            <div class="border-bottom pb-3">
                              <div class="rotate-img">
                                <img
                                  src="<?= base_url() ?>assets_admin/img/<?= $wst['images'] ?>"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <p class="fs-16 font-weight-600 mb-0 mt-3">
                                
                                <?php  echo substr($wst['judul_berita'],0,50)."....";?>
                              </p>
                              <a href="<?= base_url('news/') ?><?= $wst['kategori_berita'] ?>/<?= $wst['slug'] ?>" class="">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
                              <p class="fs-13 text-muted mb-0">

                               <span class="mr-2"><i class="far fa-calendar-minus"></i></span>Dipost: <?= $wst['date'] ?> / <a href="" class="badge badge-primary"><?= $wst['kategori_berita'] ?></a>
                              </p>
                            </div>

                          <?php } ?>
                            
                          </div>

                          <div class="col-sm-6">
                            <div class="card-title">
                              Berita Sejarah
                              <hr>
                            </div>

                            <?php foreach ($sejarah as $sjr) {?>
                            
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="pt-3">
                                  <div class="row">
                                    <div class="col-sm-5 pr-2">
                                      <div class="rotate-img">
                                        <img
                                          src="<?= base_url() ?>assets_admin/img/<?= $sjr['images'] ?>"
                                          alt="thumb"
                                          class="img-fluid w-100"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-sm-7 pl-2">
                                      <p class="fs-12 font-weight-600 mb-0">
                                        <a class="text-dark" href="<?= base_url('news/') ?><?= $sjr['kategori_berita'] ?>/<?= $sjr['slug'] ?>">
                                       <?php  echo substr($sjr['judul_berita'],0,25)."....";?>
                                     </a>
                                      </p>

                                      <p class="fs-13 text-muted mb-0">
                                        <span class="mr-2"><i class="far fa-calendar-minus"></i></span> Dipost: <?= $sjr['date'] ?> / <a href="" class="badge badge-primary"><?= $sjr['kategori_berita'] ?></a>
                                      </p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          <?php } ?>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
       