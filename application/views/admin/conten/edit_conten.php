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
                                                      <h4 class="mb-4 ">Update Conten</h4>
                                                      
                                                      <form method="post" action="<?= base_url('admin/conten/update'); ?>" enctype="multipart/form-data">
                                                      <?php foreach ($konten as $aa) { ?>
                                                      <input type="hidden" name="foto" value="<?=$aa['foto']?>">
                                                            <div class="container-fluid pt-4 px-4">
                                                            
                                                                  <div class="col-sm-12 col-xl-12">
                                                                        <div class="bg-light rounded h-100 p-4">
                                                                              <label for="floatingInput" >Judul Conten</label>
                                                                              <div class="form mb-3 row">
                                                                                    <input type="text" class="form-control" id="floatingInput" name="judul"  value="<?=$aa['judul']?>">
                                                                                    
                                                                              </div>
                                                                              <label for="floatingInput">Kategori Conten</label>
                                                                              <div class="form mb-3 row">                                                                                 
                                                                                   
                                                                                    <select name="id_kategori" class="form-control" id="floatingInput" >
                                                                                    <?php foreach ($kategori as $uu) { ?>
                                                                                    <option 
                                                                                    <?php if($uu['id_kategori']==$aa['id_kategori'])?>
                                                                                    value="<?= $uu['id_kategori'];?>"><?= $uu['nama_kategori'];?></option>
                                                                                    <?php } ?>  
                                                                                    </select>
                                                                              </div>
                                                                              <label for="floatingInput">Keterangan Conten</label>
                                                                              <div class="form mb-3 row">
                                                                                   <input name="keterangan" class="form-control" id="floatingInput"  value="<?=$aa['keterangan']?>">
                                                                              </div>
                                                                              <label for="floatingInput">Foto </label>
                                                                              <div class="form mb-3 row">
                                                                                    <input type="file" class="form-control" id="floatingInput" name="foto"  accept="image/png,image/jpeg ">
                                                                              </div>
                                                                              <br>
                                                                         
                                                                        </div>
                                                                        <br>
                                                                        <button type="submit" class="btn btn-primary">submit</button>
                                                                        <a type="submit" class="btn btn" href="<?= base_url('admin/conten/index'); ?>">back</a>
                                                                  </div>
                                                                 
                                                            </div>
                                                            <?php }?>  
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