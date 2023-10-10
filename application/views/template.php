<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets_template/argon') ?>/assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="<?= base_url('assets_template/argon') ?>/assets/img/favicon.png">
      <title>
            <?= $judul_halaman;?>
      </title>
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <!-- Nucleo Icons -->
      <link href="<?= base_url('assets_template/argon') ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="<?= base_url('assets_template/argon') ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="<?= base_url('assets_template/argon') ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="<?= base_url('assets_template/argon') ?>/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body>
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
            <div class="sidenav-header">
                  <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                  <a class="navbar-brand m-0" href="<?= base_url('auth/logout') ?>" >
                        <img src="<?= base_url('assets_template/argon') ?>/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                        <span class="ms-1 font-weight-bold">RAAZFA DASH</span>
                  </a>
                  
            </div>

            <hr class="horizontal dark mt-0">
            <div class="sidenav-header navbar-brand m-0">
            <span class="ms-1 font-weight-bold"><?= $this->session->userdata('nama')?></span>
            <br>
            <small class="ms-1 font-weight-bold"><?= $this->session->userdata('level')?></small>
            </div>
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                  <ul class="navbar-nav">
                        <?php $menu = $this->uri->segment(2);  ?>
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='dashboard'){echo "active";}?>" href="<?= base_url('admin/dashboard') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-house-fill" viewBox="0 0 16 16">
                                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6> Dashboard</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='konfigurasi'){echo "active";}?>" href="<?= base_url('admin/konfigurasi') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="bi bi-table color"></i>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-table color-" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>Configure</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='kategori'){echo "active";}?>" href="<?= base_url('admin/kategori') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-ui-radios" viewBox="0 0 16 16">
                                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>categories</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='conten'){echo "active";}?>" href="<?= base_url('admin/conten') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-paragraph" viewBox="0 0 16 16">
                                                <path d="M10.5 15a.5.5 0 0 1-.5-.5V2H9v12.5a.5.5 0 0 1-1 0V9H7a4 4 0 1 1 0-8h5.5a.5.5 0 0 1 0 1H11v12.5a.5.5 0 0 1-.5.5z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>conten</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='promo'){echo "active";}?>" href="#">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-ui-radios" viewBox="0 0 16 16">
                                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>promo</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='caraousel'){echo "active";}?>" href="<?= base_url('admin/caraousel') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-ui-radios" viewBox="0 0 16 16">
                                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>Caraousel</h6></span>
                              </a>
                        </li>
                 
                        <li class="nav-item">
                              <a class="nav-link <?php if($menu=='pengguna'){echo "active";}?>" href="<?= base_url('admin/pengguna') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="bi bi-table color"></i>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-table color-" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                          </svg>
                                    </div>
                                    <h6><span class="nav-link-text ms-1">Users</span></h6>
                              </a>
                        </li>

                  </ul>
            </div>
      </aside>
      
      <main class="main-content position-relative border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
                  <div class="container-fluid py-1 px-3">
                        <nav aria-label="breadcrumb">
                              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                              </ol>
                              <h6 class="font-weight-bolder text-white mb-0"></h6>
                        </nav>
                        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                    <div class="input-group">
                                          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                          <input type="text" class="form-control" placeholder="Type here...">
                                    </div>
                              </div>
                        </div>
                  </div>
            </nav>
           
            <div class="container-fluid py-4">
                  <div class="row">
                        <div class="row mt-4">
                        <div> <?php echo $contents; ?></div>
                              <footer class="footer pt-3  ">
                                    <div class="container-fluid">
                                          <div class="row align-items-center justify-content-lg-between">
                                                <div class="col-lg-6 mb-lg-0 mb-4">
                                                      <div class="copyright text-center text-sm text-muted text-lg-start">
                                                            © <script>
                                                                  document.write(new Date().getFullYear())
                                                            </script>,
                                                            made with <i class="fa fa-heart"></i> by
                                                            <a href="#" class="font-weight-bold" target="_blank">RAAZFA</a>
                                                            for a better web.
                                                      </div>
                                                </div>
                                                
                                          </div>
                                    </div>
                              </footer>
                        </div>
                  </div>
            </div>
      </main>
      <div class="row mt-4">
            <div class="fixed-plugin">
                  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                  </a>
                  <div class="card shadow-lg">
                        <div class="card-header pb-0 pt-3 ">
                              <div class="float-start">
                                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                                    <p>See our dashboard options.</p>
                              </div>
                              <div class="float-end mt-4">
                                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                                          <i class="fa fa-close"></i>
                                    </button>
                              </div>
                              <!-- End Toggle Button -->
                        </div>
                        <hr class="horizontal dark my-1">
                        <div class="card-body pt-sm-3 pt-0 overflow-auto">
                              <!-- Sidebar Backgrounds -->
                              <div>
                                    <h6 class="mb-0">Sidebar Colors</h6>
                              </div>
                              <a href="javascript:void(0)" class="switch-trigger background-color">
                                    <div class="badge-colors my-2 text-start">
                                          <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                                          <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                                          <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                                          <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                                          <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                                          <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                                    </div>
                              </a>
                              <!-- Sidenav Type -->
                              <div class="mt-3">
                                    <h6 class="mb-0">Sidenav Type</h6>
                                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                              </div>
                              <div class="d-flex">
                                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
                              </div>
                              <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                              <!-- Navbar Fixed -->
                              <div class="d-flex my-3">
                                    <h6 class="mb-0">Navbar Fixed</h6>
                                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                                          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                                    </div>
                              </div>
                              <hr class="horizontal dark my-sm-4">
                              <div class="mt-2 mb-5 d-flex">
                                    <h6 class="mb-0">Light / Dark</h6>
                                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                                          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                                    </div>
                              </div>
                              <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
                              <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
                              <div class="w-100 text-center">
                                    <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                                    <h6 class="mt-3">Thank you for sharing!</h6>
                                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                                          <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                                          <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> FB
                                    </a>
                                    <h6></h6>
                                    <a href="" class="btn btn-dark mb-0 me-2" target="_blank">
                                          <i class="fab fa-discord me-1" aria-hidden="true"></i> Discord
                                    </a>

                              </div>
                        </div>
                  </div>
            </div>
            <!--   Core JS Files   -->
           
            <script src="<?= base_url('assets_template/argon') ?>/assets/js/core/popper.min.js"></script>
            <script src="<?= base_url('assets_template/argon') ?>/assets/js/core/bootstrap.min.js"></script>
            <script src="<?= base_url('assets_template/argon') ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="<?= base_url('assets_template/argon') ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
            <script src="<?= base_url('assets_template/argon') ?>/assets/js/plugins/chartjs.min.js"></script>
            
            <script>
                  var ctx1 = document.getElementById("chart-line").getContext("2d");

                  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

                  gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
                  gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
                  gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
                  new Chart(ctx1, {
                        type: "line",
                        data: {
                              labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                              datasets: [{
                                    label: "Mobile apps",
                                    tension: 0.4,
                                    borderWidth: 0,
                                    pointRadius: 0,
                                    borderColor: "#5e72e4",
                                    backgroundColor: gradientStroke1,
                                    borderWidth: 3,
                                    fill: true,
                                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                                    maxBarThickness: 6

                              }],
                        },
                        options: {
                              responsive: true,
                              maintainAspectRatio: false,
                              plugins: {
                                    legend: {
                                          display: false,
                                    }
                              },
                              interaction: {
                                    intersect: false,
                                    mode: 'index',
                              },
                              scales: {
                                    y: {
                                          grid: {
                                                drawBorder: false,
                                                display: true,
                                                drawOnChartArea: true,
                                                drawTicks: false,
                                                borderDash: [5, 5]
                                          },
                                          ticks: {
                                                display: true,
                                                padding: 10,
                                                color: '#fbfbfb',
                                                font: {
                                                      size: 11,
                                                      family: "Open Sans",
                                                      style: 'normal',
                                                      lineHeight: 2
                                                },
                                          }
                                    },
                                    x: {
                                          grid: {
                                                drawBorder: false,
                                                display: false,
                                                drawOnChartArea: false,
                                                drawTicks: false,
                                                borderDash: [5, 5]
                                          },
                                          ticks: {
                                                display: true,
                                                color: '#ccc',
                                                padding: 20,
                                                font: {
                                                      size: 11,
                                                      family: "Open Sans",
                                                      style: 'normal',
                                                      lineHeight: 2
                                                },
                                          }
                                    },
                              },
                        },
                  });
            </script>
            <script>
                  var win = navigator.platform.indexOf('Win') > -1;
                  if (win && document.querySelector('#sidenav-scrollbar')) {
                        var options = {
                              damping: '0.5'
                        }
                        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                  }
            </script>
            <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="<?= base_url('assets_template/argon') ?>/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
            <script>
                  $('#ilang').delay('slow').slideDown('slow').delay(3000).slideUp(600);
            </script>
</body>

</html>