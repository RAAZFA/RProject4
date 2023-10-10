<!-- Widgets Start -->
<div id="ilang">
  <?= $this->session->flashdata('alert', true) ?>
</div>


<div class="col-lg-12 mb-lg-0 mb-4">
  <div class="card z-index-2 h-100">
    <div class="card-header pb-0 pt-3 bg-transparent">
      <a href="<?= base_url('admin/conten/tambah_conten') ?>" class="btn btn-square btn-warning m-2"><i class="bi bi-pencil-square">tambah Konten</a>
      <br>
      <div class="card px-4 mb-4">
        <div class="card-header pb-2">
          <h6>table Conten</h6>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center">
            <thead>
              <tr>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">Num</th>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">Judul</th>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">Kategori Konten</th>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">Tanggal</th>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">KREATOR </th>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">Foto</th>
                <th scope="col" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($konten as $aa) { ?>
                <tr>
                  <div class="d-flex px-2 py-1">
                    <th scope="row" class="text-center text-uppercase text-secondary text-xxl font-weight-bolder"><?= $no; ?></th>
                    <td class="text-center  text-secondary text-xxl font-weight-bolder"><?= $aa['judul']; ?></td>
                    <td class="text-center  text-secondary text-xxl font-weight-bolder"><?= $aa['nama_kategori']; ?></td>
                    <td class="text-center  text-secondary text-xxl font-weight-bolder"><?= $aa['tanggal']; ?></td>
                    <td class="text-center  text-secondary text-xxl font-weight-bolder"><?= $aa['nama']; ?></td>
                    <td class="text-center  text-secondary text-xxl font-weight-bolder">
                      <a href="<?= base_url('assets_template/upload/conten/' . $aa['foto']) ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg> Lihat Foto
                      </a>
                    </td>

                    <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <a href="<?= base_url('admin/conten/delete/' . $aa['foto'])  ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg> </a>
                      <a href="<?= base_url('admin/conten/edit_conten/' . $aa['id_konten']) ?>" class="btn btn-warning m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></a>
                    </td>
                  </div>

                </tr>
              <?php $no++;
              } ?>
            </tbody>
          </table>

          <br>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Widgets End -->