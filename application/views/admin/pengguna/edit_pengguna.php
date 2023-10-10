<div class="container-fluid py-4">
  <div class="row">
    <div class="row mt-4">
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
                              <h4 class="mb-4">Form Edit pengguna</h4>
                                    <?php foreach ($user as $aa) { ?>
                                          <form method="post" action="<?= base_url('admin/pengguna/update'); ?>">
                                                <input name="id_user" type="hidden" value="<?= $aa['id_user']; ?>">
                                                <div class="container-fluid pt-4 px-4">
                                                      <div class="col-sm-12 col-xl-12">
                                                            <div class="bg-light rounded h-100 p-4">
                                                                  
                                                                  <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control" id="floatingInput" name="username" value="<?= $aa['username'] ?>" readonly>
                                                                        <label for="floatingInput">Username</label>
                                                                  </div>
                                                                  <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control" id="floatingInput" name="nama" value="<?= $aa['nama'] ?>">
                                                                        <label for="floatingInput">Nama Lengkap</label>
                                                                  </div>
                                                                 
                                                                 
                                                            </div>
                                                      </div>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">
                                                      Update
                                                </button>
                                                <a type="submit" class="btn btn" href="<?= base_url('admin/pengguna/'); ?>">back</a>
                                          </form>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
            </div>
      </div>   
</div>
   