<div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        <?= ucwords($title) ?>
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">

                      <?php foreach ($kategori as $data) { ?>

                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="<?= base_url() ?>assets_admin/img/<?= $data['images'] ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <a class="text-dark" href="<?= base_url('news/') ?><?= $data['kategori_berita'] ?>/<?= $data['slug'] ?>">
                          <h2 class="font-weight-600 mb-2">
                            <?= $data['judul_berita'] ?>
                          </h2>

                        </a>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2"> </span><?= $data['date'] ?>
                          </p>
                          <p class="fs-15">
                            <?php  echo "<p>".substr($data['isi_berita'],0,150)." ....</p>"; ?>
                          </p>
                        </div>
                      </div>

                    <?php } ?>
                      
                    </div>
                    <div class="col-lg-4">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Berita Terbaru
                      </h2>
                      <?php foreach ($berita as $lates) { ?>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                   <a class="text-dark" href="<?= base_url('news/') ?><?= $lates['kategori_berita'] ?>/<?= $lates['slug'] ?>">
                                 <?= $lates['judul_berita'] ?>
                               </a>
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Post </span><?= $lates['date'] ?>
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="<?= base_url() ?>assets_admin/img/<?= $lates['images'] ?>"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                      
                      <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                          Trending
                        </h2>

                        <?php foreach ($trending as $tren) { ?>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="<?= base_url() ?>assets_admin/img/<?= $tren['images'] ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            <a class="text-dark" href="<?= base_url('news/') ?><?= $tren['kategori_berita'] ?>/<?= $tren['slug'] ?>">
                            <?= $tren['judul_berita'] ?>
                          </a>
                          </a>
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Post</span><?= $tren['date'] ?>
                          </p>
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