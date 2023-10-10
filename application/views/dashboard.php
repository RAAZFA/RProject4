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
                        <i class="bi bi-envelope d-flex align-items-center"><a href="<?= $konfig->email; ?>">Email</a></i>
                        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= $konfig->no_wa; ?></span></i>
                  </div>
                  <div class="social-links d-none d-md-flex align-items-center">

                        <a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="<?= $konfig->instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>

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
      <!-- End Header -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                  <?php $no = 1;
                  foreach ($caraousel as $cc) { ?>
                        <div class="carousel-item <?php if ($no == 1) {
                                                            echo 'active';
                                                      } ?>">
                              <img src="<?= base_url('assets_template/upload/carousel/' . $cc['foto']) ?>" class="w-100">
                        </div>
                  <?php $no++;
                  } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
            </button>
      </div>
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero">
            <div class="container position-relative">
                  <div class="row gy-5" data-aos="fade-in">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                              <h2>Welcome to <span>My CMS Weebs</span></h2>
                              <p>This is my first CMS Website so dont hope too much about this</p>
                              <div class="d-flex justify-content-center justify-content-lg-start">
                                    <a href="<?= base_url('auth/login') ?>" class="btn-get-started">Login Admin</a>
                                    <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>huh??????????????????</span></a>
                              </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                              <img src="<?= base_url('assets_template/Impact') ?>/assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                        </div>
                  </div>
            </div>

      </section>
      <!-- End Hero Section -->
      <main id="main">
            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                  <div class="container" data-aos="fade-up">
                        <div class="section-header">
                              <h2>About <?= $konfig->judul_website; ?></h2>
                              <p><?= $konfig->profil_website; ?></p>
                        </div>
                        <div class="row gy-4">
                              <div class="col-lg-12">
                                    <h3>About me</h3>
                                    <div class="content ps-0 ps-lg-5">
                                          <p class="fst-italic">
                                                Pegunungan atau disebut juga banjaran dan barisan merupakan suatu area geografis berupa rentetan dari beberapa gunung-gunung atau bukit yang terkait secara geologis yang membentuk suatu deret atau bentangan.
                                                Pegunungan yang dibatasi oleh dataran tinggi atau terpisah dari pegunungan lain dengan melewati punggung gunung atau lembah. Di Bumi, pegunungan biasanya terbentuk dari pergerakan lempeng tektonik melalui sederetan proses. Pegunungan juga ditemukan di planet selain Bumi di Tata Surya dan merupakan bentang alam yang umum dijumpai pada Planet kebumian.
                                          </p>
                                          <p class="fst-italic">
                                                Pegunungan ini meskipun terdiri dari beberapa kumpulan gunung, namun tidak bisa disamakan dengan gunung berapi yang masih aktif.
                                                Pegunungan tidak menimbulkan erupsi dan mengeluarkan magma seperti yang terjadi pada gunung berapi yang masih aktif.
                                          </p>
                                          <p class="fst-italic">
                                                Gunung tunggal dalam pegunungan yang sama, tidak harus memiliki geologi yang sama.
                                                Meskipun mereka berada di tempat yang sama, mereka mungkin memiliki campuran Orogeny berbeda, misalnya gunung berapi, gunung-gunung terangkat atau pegunungan lipat.
                                          </p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section><!-- End About Us Section -->
            <section id="services" class="services sections-bg">
                  <div class="container aos-init aos-animate " data-aos="fade-up">
                        <div class="section-header">
                              <h2>Conten</h2>
                        </div>
                        <div class="row gy-3 aos-init aos-animate" data-aos="fade-up">
                              <?php foreach ($konten as $uu) { ?>

                                    <div class="col-lg-3 col-md-12 ">
                                          <div class="service-item  position-relative">
                                                <img src="<?= base_url('assets_template/upload/conten/' . $uu['foto']) ?>" class="w-100">
                                                <h3><?= $uu['judul'] ?></h3>
                                                <h4><?= $uu['nama'] ?></h4>
                                                <h4><?= $uu['nama_kategori'] ?></h4>
                                                <p>
                                                      <i class="bi bi-quote quote-icon-left"></i>
                                                      <?= $uu['tanggal'] ?>
                                                      <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                                          </div>
                                    </div><!-- End Service Item -->

                              <?php } ?>
                        </div>
                  </div>
            </section>
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio sections-bg">
                  <div class="container" data-aos="fade-up">
                        <div class="section-header">
                              <h2>Portfolio</h2>
                              <p>my portfolio is just this web</p>
                        </div>
                        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                              <div>
                                    <ul class="portfolio-flters">
                                          <li data-filter="*" class="filter-active">All</li>
                                          <li data-filter=".filter-app">App</li>
                                          <li data-filter=".filter-product">Product</li>
                                          <li data-filter=".filter-branding">Branding</li>
                                          <li data-filter=".filter-books">Books</li>
                                    </ul><!-- End Portfolio Filters -->
                              </div>
                              <div class="row gy-4 portfolio-container">
                                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                          <div class="portfolio-wrap">
                                                <a href="<?= base_url('assets_template/Impact') ?>/assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                                                <div class="portfolio-info">
                                                      <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                                                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                </div>
                                          </div>
                                    </div><!-- End Portfolio Item -->
                                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                                          <div class="portfolio-wrap">
                                                <a href="<?= base_url('assets_template/Impact') ?>/assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                                                <div class="portfolio-info">
                                                      <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                                                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                </div>
                                          </div>
                                    </div><!-- End Portfolio Item -->
                                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                                          <div class="portfolio-wrap">
                                                <a href="<?= base_url('assets_template/Impact') ?>/assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                                                <div class="portfolio-info">
                                                      <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                                                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                </div>
                                          </div>
                                    </div><!-- End Portfolio Item -->
                                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                                          <div class="portfolio-wrap">
                                                <a href="<?= base_url('assets_template/Impact') ?>/assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                                                <div class="portfolio-info">
                                                      <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                                                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                </div>
                                          </div>
                                    </div><!-- End Portfolio Item -->
                              </div><!-- End Portfolio Container -->

                        </div>

                  </div>
            </section><!-- End Portfolio Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                  <div class="container" data-aos="fade-up">
                        <div class="section-header">
                              <h2>Contact</h2>
                              <p>Call me if you need a new website</p>
                        </div>
                        <div class="row gx-lg-4 gy-4">
                              <div class="col-lg-6">
                                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                          <div class="info-item d-flex">
                                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                                <div>
                                                      <h4>Location:</h4>
                                                      <p><?= $konfig->alamat; ?></p>
                                                </div>
                                          </div><!-- End Info Item -->
                                          <div class="info-item d-flex">
                                                <i class="bi bi-envelope flex-shrink-0"></i>
                                                <div>
                                                      <h4>Email:</h4>
                                                      <p><?= $konfig->email; ?></p>
                                                </div>
                                          </div><!-- End Info Item -->
                                          <div class="info-item d-flex">
                                                <i class="bi bi-phone flex-shrink-0"></i>
                                                <div>
                                                      <h4>Call:</h4>
                                                      <p><?= $konfig->no_wa; ?></p>
                                                </div>
                                          </div><!-- End Info Item -->

                                    </div>
                              </div>
                              <div class="col-lg-6">
                                    <form role="form" class="php-email-form d-flex flex-column align-items-center">
                                          <div class="info-item d-flex">
                                                <div>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d349.5622807488612!2d110.93938397531161!3d-7.59176245582517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzUnMjkuMCJTIDExMMKwNTYnMjEuMyJF!5e0!3m2!1sid!2sid!4v1695955482467!5m2!1sid!2sid" width="525" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                          </div><!-- End Info Item -->
                                    </form>
                              </div><!-- End Contact Form -->
                        </div>
                  </div>
            </section><!-- End Contact Section -->
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
                              <p>
                                    <strong>alamat: </strong><?= $konfig->alamat; ?><br>
                                    <strong>Phone: </strong> <?= $konfig->no_wa; ?><br>
                                    <strong>Email: </strong> <?= $konfig->email; ?><br>
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