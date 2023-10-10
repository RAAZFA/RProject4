    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>
        <div class="row">
          <?php foreach ($konten as $uu) { ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="<?= base_url('assets/upload/conten/' . $uu['foto']) ?>" class="img-fluid" alt="">
                  <div class="social">
                    <a href="<?= $konfig->facebook; ?>"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $konfig->instagram; ?>"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?= $uu['judul'] ?></h4>
                  <span><?= $uu['nama'] ?></span>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Team Section -->