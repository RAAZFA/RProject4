<div class="min-height-300 bg-primary position-absolute w-100"></div>
      <sidenav class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
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
                        <li class="nav-item">
                              <a class="nav-link active" href="<?= base_url('admin/dashboard/index') ?>">
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
                              <a class="nav-link " href="<?= base_url('admin/konfigurasi/') ?>">
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
                              <a class="nav-link " href="<?= base_url('admin/kategori/index') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-ui-radios" viewBox="0 0 16 16">
                                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>categories</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link " href="<?= base_url('admin/conten/index') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-paragraph" viewBox="0 0 16 16">
                                                <path d="M10.5 15a.5.5 0 0 1-.5-.5V2H9v12.5a.5.5 0 0 1-1 0V9H7a4 4 0 1 1 0-8h5.5a.5.5 0 0 1 0 1H11v12.5a.5.5 0 0 1-.5.5z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>conten</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link " href="#">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-ui-radios" viewBox="0 0 16 16">
                                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>promo</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link " href="<?= base_url('admin/caraousel') ?>">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#596CFF" class="bi bi-ui-radios" viewBox="0 0 16 16">
                                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                          </svg>
                                    </div>
                                    <span class="nav-link-text ms-1"><h6>Caraousel</h6></span>
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link " href="<?= base_url('admin/pengguna/lihat_pengguna') ?>">
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
      </sidenav>