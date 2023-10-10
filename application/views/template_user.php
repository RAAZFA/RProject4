<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Raazfa//Impact Index</title>
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

      <div> <?php echo $contents; ?></div>

      <footer id="footer" class="footer">
            <div class="container">
                  <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                              <a href="#" class="logo d-flex align-items-center">
                                    <span>Raazfa // Impact.<?= $konfig->judul_website; ?></span>
                              </a>
                              <p><?= $konfig->profil_website; ?></p>
                              <div class="social-links d-flex mt-4">
                                    <a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="<?= $konfig->instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>

                              </div>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                              <h4>Useful Links</h4>
                              <ul>
                                    <li><a href="<?= base_url()?>">Home</a></li>
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