<!-- End Navbar -->
<div id="ilang">
      <?= $this->session->flashdata('alert', true) ?>
</div>
<div class="col-lg-7 mb-lg-0 mb-4">
  <div class="card-body p-3">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="mb-0">Konfigurasi</h4>
        </div>
        <div class="card-body">
          <form method="post" action="<?= base_url('admin/konfigurasi/update'); ?>">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">judul</label>
              <input type="text" class="form-control" id="basic-default-fullname" placeholder="Judul" name="judul_website" value="<?= $konfig ->judul_website; ?>" >
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Profil</label>
              <textarea class="form-control" id="basic-default-company" placeholder="Profile" name="profil_website"><?= $konfig ->profil_website; ?></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Instagram</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="Instagram" name="instagram"value="<?= $konfig ->instagram; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Facebook</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="Facebook" name="facebook"value="<?= $konfig ->facebook; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Email</label>
              <div class="input-group input-group-merge">
                <input type="text" id="basic-default-email" class="form-control" placeholder="Email" aria-describedby="basic-default-email2" name="email"value="<?= $konfig ->email; ?>">
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Alamat</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="Profile" name="alamat"value="<?= $konfig ->alamat; ?>">
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-phone">Phone No</label>
              <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="62858 799 8941 " name="no_wa"value="<?= $konfig ->no_wa; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
           
          </form>
        </div>
      </div>
    </div>
  </div>
</div>