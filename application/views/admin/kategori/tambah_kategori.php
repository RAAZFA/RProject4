<<!-- Widgets Start -->
      <div class="container-fluid py-4">
            <div class="row">
                  <div class="row mt-4">
                        <div class="col-lg-7 mb-lg-0 mb-4">
                              <div class="card z-index-2 h-100">
                                    <div class="card-header pb-0 pt-3 bg-transparent">
                                          <div class="card mb-4">
                                                <div id="ilang">
                                                      <?= $this->session->flashdata('alert', true) ?>
                                                </div>
                                                <div class="card-header pb-0">
                                                      <h4 class="mb-4 ">Input Categories</h4>
                                                      <form method="post" action="<?= base_url('admin/kategori/tambah'); ?>">
                                                            <div class="container-fluid pt-4 px-4">
                                                                  <div class="col-sm-12 col-xl-12">
                                                                        <div class="bg-light rounded h-100 p-4">

                                                                        <label for="floatingInput">Nama Lengkap</label>
                                                                              <div class="form-floating mb-3">
                                                                                    <input type="text" class="form-control" id="floatingInput" name="nama_kategori" placeholder="name@example.com">
                                                                                    
                                                                              </div>
                                                                        </div>
                                                                        <br>

                                                                        <button type="submit" class="btn btn-primary">submit</button>
                                                                        <a type="submit" class="btn btn" href="<?= base_url('admin/kategori/index'); ?>">back</a>
                                                                  </div>
                                                            </div>
                                                      </form>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>


      <!-- Widgets End -->