<?php 

     $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCdY7cjdz4h9aSO5ce-17fFA&maxResults=5&order=date&key=AIzaSyDU7vIuSINm6JrSyhFOVu7WLPEwPOlel7k');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result, true);

       $latestVideoId = $result['items'][0]['id']['videoId'];
     $title = $result['items'][0]['snippet']['title'];
     // echo $text = $result['items'][0]['snippet']['description'];





 ?>
        <!-- partial -->
        <!-- <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Berita Terupdate</span>
                <p class="mb-0">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s.
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger"><?=  date('d F Y') ?></span>
                <span class="text-danger">30°C, Stabat</span>
              </div>
            </div>
          </div>
        </div> -->
        <div class="content-wrapper">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8 stretch-card grid-margin">
                <div class="position-relative">
                  <img
                    src="<?= base_url('assets_admin/img/') ?><?= $trending['images'] ?>"
                    alt="banner"
                    class="img-fluid"
                  />
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      Trending Topik
                    </div>
                    <h1 class="mb-0"><?= $trending['judul_berita'] ?></h1>

                    <h1 class="mb-2">
                  
                    </h1>
                    <div class="fs-12">
                      <span class="mr-2"><i class="far fa-clock"></i>Dipost:</span><?= $trending['date'] ?>

                    </div>
                    <a href="<?= base_url('news/') ?><?= $trending['kategori_berita'] ?>/<?= $trending['slug'] ?>" class="btn btn-primary mt-3"><i class="fas fa-book-open mr-2"> </i> Baca Berita Sekarang</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2>Berita Terebaru</h2>

                      <?php foreach ($new as $data2) { ?>
                  
                    <div
                      class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"
                    >
                     
                      <div class="pr-3">
                        <a href="<?= base_url('news/') ?><?= $data2['kategori_berita'] ?>/<?= $data2['slug'] ?>" style="color: white;">
                        <h5><?php  echo substr($data2['judul_berita'],0,50)."....";?></h5>
                      </a>
                        <div class="fs-12">
                          <span class="mr-2"><i class="far fa-clock"></i></span><?= $data['date'] ?>
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="<?= base_url('assets_admin/img/') ?><?= $data2['images'] ?>"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                  <?php } ?>




                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Kategori Berita</h2>
                    <ul class="vertical-menu">
                      <li><a href="<?= base_url() ?>news/kategori-berita/berita">Berita Terkini</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/nasional">Berita Nasional</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/daerah">Berita Daerah</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/bisnis">Bisnis</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/olahraga">Olahraga</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/budaya">Budaya</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/sejarah">Sejarah</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/politik">Politik</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/wisata">Wisata</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/teknologi">Teknologi</a></li>
                      <li><a href="<?= base_url() ?>news/kategori-berita/ekonomi">Ekonomi</a></li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">

                    <?php foreach ($berita as $home) {?>
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="<?= base_url() ?>assets_admin/img/<?= $home['images'] ?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Terbaru</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          <?= $home['judul_berita'] ?>
                        </h2>
                        <div class="fs-13 mb-2">
                          <i class="fas fa-calendar-minus"></i> <span class="mr-2">Post:</span><?= $home['date'] ?>
                        </div>
                        <p class="mb-0">
                          <?php  echo "<p>".substr($home['isi_berita'],0,200)."</p>"; ?>
                        </p>
                        <a href="<?= base_url('news/') ?><?= $home['kategori_berita'] ?>/<?= $home['slug'] ?>" class="badge badge-primary">Baca Selengkapnya</a>
                      </div>
                    </div>

                  <?php } ?>






                   <!--  <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/home_5.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          No charges over 2017 Conservative battle bus cases
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          Lorem Ipsum has been the industry's standard dummy
                          text ever since the 1500s, when an
                        </p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/home_6.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600">
                          Kaine: Trump Jr. may have committed treason
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          Lorem Ipsum has been the industry's standard dummy
                          text ever since the 1500s, when an
                        </p>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="card-title">
                          Video Terbaru
                        </div>
                        <div class="row">
                        <?php foreach ($video as $vd) {
                        ?>
                          <div class="col-sm-6 grid-margin">

                            <div class="position-relative">

                               <div class="embed-responsive embed-responsive-16by9">
                                <?= $vd['link'] ?>
                              </div>

                              <div class="rotate-img">

                                

                                
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                      
                                </div>
                              </div>
                            </div>
                            <h3><a class="text-dark" href="<?= base_url() ?>video/<?= $vd['slug'] ?>"><?= $vd['judul_post'] ?></a></h3>
                          </div>



                        <?php } ?>

                          <!-- <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="assets/images/dashboard/home_8.jpg"
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
                          </div> -->
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
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="card-title">
                            Video Lainya
                          </div>
                          <p class="mb-3">See all</p>
                        </div>
                        <?php foreach ($list as $list2) { ?>
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?= base_url() ?>assets/images/play.png"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3 class="font-weight-600 mb-0">
                             <a class="text-dark" href="<?= base_url() ?>video/<?= $list2['slug'] ?>"><?php  echo substr($list2['judul_post'],0,20)."....";?></a>
                            
                          </h3>
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
                              <a href="<?= base_url('news/') ?><?= $olahraga['kategori_berita'] ?>/<?= $olahraga['slug'] ?>" class="">Baca Selengkapnya <i class="fas fa-angle-right"></i></a><br>
                              <span class="mr-2"></span><?= $olahraga['date'] ?>/ 

                              <a href="" class="badge badge-primary"><?= $olahraga['kategori_berita'] ?></a>
                            </p>


                            
                          </div>

                          <div class="col-xl-6 col-lg-4 col-sm-6">
                            <div class="border-bottom pb-3 mb-3">
                              <h3 class="font-weight-600 mb-0">
                                Persija Resmi Buang Bambang Pemungkas
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
                            </div>
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

                               <span class="mr-2"><i class="far fa-clock"></i></span><?= $wst['date'] ?> / <a href="" class="badge badge-primary"><?= $wst['kategori_berita'] ?></a>
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
                                        <span class="mr-2"><i class="far fa-clock"></i></span><?= $sjr['date'] ?> / <a href="" class="badge badge-primary"><?= $sjr['kategori_berita'] ?></a>
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
       