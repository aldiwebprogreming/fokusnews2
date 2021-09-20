<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fokus news</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?= base_url() ?>/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo3.jpeg" />

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- endinject -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v11.0" nonce="sx0cDnLw"></script>

      </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <!-- <ul class="navbar-top-left-menu">
                    <li class="nav-item">
                      <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/aboutus.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Write for Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">In the Press</a>
                    </li>
                  </ul> -->
                  <!-- <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Sign in</a>
                    </li>
                  </ul> -->
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="<?= base_url() ?>assets/images/logo2.png" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?= base_url() ?>fokusnews/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Berita
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>news/kategori-berita/berita">Berita Terkini</a>
                            <a class="dropdown-item" href="<?= base_url() ?>news/kategori-berita/nasional">Berita Nasional</a>

                            <a class="dropdown-item" href="<?= base_url() ?>news/kategori-berita/daerah">Berita Daerah</a>
                            
                          </div>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/bisnis">Bisnis</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/olahraga">Olaraga</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/budaya">Budaya</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/sejarah">Sejarah</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/politik">Politik</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/wisata">Wisata</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/teknologi">Teknologi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url() ?>news/kategori-berita/ekonomi">Ekonomi</a>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                  <?php 

                    $sosial = $this->db->get('tbl_sosial_media')->row_array();
                   ?>
                  <ul class="social-media">
                    <li>
                      <a href="<?= $sosial['facebook'] ?>">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="<?= $sosial['instagram'] ?>">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="<?= $sosial['youtube'] ?>">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>