<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title><?= $judul; ?></title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="<?= base_url('assets_template/Impact') ?>/assets/img/favicon.png" rel="icon">
      <link href="<?= base_url('assets_template/Impact') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="<?= base_url('assets_template/Impact') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?= base_url('assets_template/Impact') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="<?= base_url('assets_template/Impact') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="<?= base_url('assets_template/Impact') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="<?= base_url('assets_template/Impact') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="<?= base_url('assets_template/Impact') ?>/assets/css/main.css" rel="stylesheet">

      <!-- =======================================================
  * Template Name: Impact
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
      <!-- ======= Header ======= -->
      <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                  <div class="contact-info d-flex align-items-center">
                        <i class="bi bi-envelope d-flex align-items-center"><a href="gmail.com/azzamr255@gmail.com">Email</a></i>
                        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 896-7000-4724</span></i>
                  </div>
                  <div class="social-links d-none d-md-flex align-items-center">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                  </div>
            </div>
      </section><!-- End Top Bar -->
      <header id="header" class="header d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                  <a href="<?= base_url('auth/login') ?>" class="logo d-flex align-items-center">
                        <!-- Uncomment the line below if you also wish to use an image logo -->
                        <!-- <img src="assets/img/logo.png" alt=""> -->
                        <h1>Raazfa // Impact<span>.<?= $konfig->judul_website; ?></span></h1>
                  </a>
                  <nav id="navbar" class="navbar">
                        <ul>
                              <li><a href="<?= base_url() ?>">Home</a></li>
                              <?php foreach ($kategori as $kate) { ?>
                                    <li><a href="<?= base_url('home/kategori' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
                              <?php } ?>
                              <li><a href="#portfolio">Portfolio</a></li>
                              <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                        </ul>
                  </nav><!-- .navbar -->
                  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
      </header><!-- End Header -->
      <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs">
                  <div class="page-header d-flex align-items-center" style="background-image: url('');">
                        <div class="container position-relative">
                              <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6 text-center">
                                          <h2>Artikel</h2>
                                          <p><?= $judul_konten; ?></p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <nav>
                        <div class="container">
                              <ol>
                                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                                    <li>Artikel</li>
                                    <li><?= $judul_konten; ?></li>
                              </ol>
                        </div>
                  </nav>
            </div><!-- End Breadcrumbs -->

            <!-- ======= Blog Details Section ======= -->
            <section id="blog" class="blog">
                  <div class="container" data-aos="fade-up">

                        <div class="row g-5">

                              <div class="col-lg-8">

                                    <article class="blog-details">

                                          <div class="post-img ">
                                                <img src="<?= base_url('assets_template/upload/conten/' . $konten->foto) ?>" class="img-fluid">
                                          </div>

                                          <h2 class="title"><?= $judul_konten; ?></h2>

                                          <div class="meta-top">
                                                <ul>
                                                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?= $konten->nama; ?></a></li>
                                                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?= $konten->tanggal; ?></a></li>
                                                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"><?= $konten->nama_kategori; ?></a></li>
                                                </ul>
                                          </div><!-- End meta top -->
                                          <br>
                                          <div class="row gy-4 aos-init aos-animate" data-aos="fade-up">
                                                <div class="col-lg-12 col-md-12 ">
                                                      <p><?= $konten->keterangan; ?></p>
                                                </div><!-- End Service Item -->
                                                <!-- End Service Item -->
                                          </div><!-- End post content -->
                                          <div class="meta-bottom">
                                                <i class="bi bi-folder"></i>
                                                <ul class="cats">
                                                      <li><a href="#">Business</a></li>
                                                </ul>
                                          </div><!-- End meta bottom -->
                                    </article><!-- End blog post -->

                                    <div class="post-author d-flex align-items-center">
                                          <img src="" class="rounded-circle flex-shrink-0" alt="">
                                          <div>
                                                <h4><?= $konten->nama; ?></h4>
                                                <div class="social-links">
                                                      <a href="<?= $konfig->facebook; ?>"><i class="bi bi-facebook"></i></a>
                                                      <a href="<?= $konfig->instagram; ?>"><i class="biu bi-instagram"></i></a>
                                                </div>
                                                <p>
                                                </p>
                                          </div>
                                    </div><!-- End post author -->
                              </div>
                              <div class="col-lg-4">
                                    <div class="sidebar">
                                          <div class="sidebar-item categories">
                                                <h3 class="sidebar-title">Categories</h3>
                                                <ul class="mt-3">
                                                      <li><?php foreach ($kategori as $kate) { ?>
                                                      <li><a href="<?= base_url('home/kategori' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
                                                <?php } ?></li>
                                                </ul>
                                          </div><!-- End sidebar categories-->
                                          <div class="sidebar-item recent-posts">
                                                <h3 class="sidebar-title">Recent Posts</h3>
                                                <div class="mt-3">

                                                      <div class="post-item mt-3">
                                                            <img src="<?= base_url('assets_template/upload/conten/' . $konten->foto) ?>" class="w-25">
                                                            <div class="text-center">
                                                                  <h4><?= $konten->judul; ?></h4>
                                                                  <h4><?= $konten->nama; ?></h4>
                                                                  <h4><i class="bi bi-quote quote-icon-left"></i>
                                                                  <?= $konten->tanggal; ?>
                                                                  <i class="bi bi-quote quote-icon-right"></i></h4>
                                                                 
                                                            </div>
                                                      </div><!-- End recent post item-->

                                                </div>
                                          </div><!-- End sidebar recent posts-->
                                          <div class="sidebar-item tags">
                                                <h3 class="sidebar-title">Tags</h3>
                                                <ul class="mt-3">
                                                      <li><a href="#">App</a></li>
                                                      <li><a href="#">IT</a></li>
                                                      <li><a href="#">Business</a></li>
                                                      <li><a href="#">Mac</a></li>
                                                      <li><a href="#">Design</a></li>
                                                      <li><a href="#">Office</a></li>
                                                      <li><a href="#">Creative</a></li>
                                                      <li><a href="#">Studio</a></li>
                                                      <li><a href="#">Smart</a></li>
                                                      <li><a href="#">Tips</a></li>
                                                      <li><a href="#">Marketing</a></li>
                                                </ul>
                                          </div><!-- End sidebar tags-->

                                    </div><!-- End Blog Sidebar -->

                              </div>
                        </div>

                  </div>
            </section><!-- End Blog Details Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
            <div class="container">
                  <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                              <div class="logo d-flex align-items-center">
                                    <H1>Raazfa // Impact.<span><?= $konfig->judul_website; ?></span></H1>
                              </div>
                              <p><?= $konfig->profil_website; ?></p>
                              <div class="social-links d-flex mt-4">
                                    <a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="<?= $konfig->instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>

                              </div>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                              <h4>Useful Links</h4>
                              <ul>
                                    <li><a href="<?= base_url() ?>">Home</a></li>
                                    <?php foreach ($kategori as $kate) { ?>
                                          <li><a href="<?= base_url('home/kategori' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
                                    <?php } ?>
                              </ul>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                              <h4>Our Services</h4>
                              <ul>
                                    <li><a href="#">Web Design</a></li>
                              </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                              <h4>Contact Us</h4>
                              <p><?= $konfig->alamat; ?>
                                    <br>
                                    <strong>Phone:</strong> <?= $konfig->no_wa; ?><br>
                                    <strong>Email:</strong> <?= $konfig->email; ?><br>
                              </p>
                        </div>
                  </div>
            </div>
            <div class="container mt-4">
                  <div class="copyright">
                        &copy; Copyright <strong><span>Raazfa // Impact.<?= $konfig->judul_website; ?></span></strong>. All Rights Reserved
                  </div>

            </div>
      </footer><!-- End Footer -->
      <!-- End Footer -->
      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <div id="preloader"></div>
      <!-- Vendor JS Files -->
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/aos/aos.js"></script>
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="<?= base_url('assets_template/Impact') ?>/assets/vendor/php-email-form/validate.js"></script>
      <!-- Template Main JS File -->
      <script src="<?= base_url('assets_template/Impact') ?>/assets/js/main.js"></script>
</body>

</html>