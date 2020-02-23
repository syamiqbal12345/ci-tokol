<?php $this->load->view('templates/header_back') ?>

<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-2">
      <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-cubes"></i> Tambah Produk</h1>
   </div>
   <!-- end Page Heading -->

   <!-- content -->
   <div class="row">
      <div class="col-10">
         <div class="card shadow mb-4">
            <div class="card-body">
               <form action="<?= site_url('seller/produk/tambah') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label class="font-weight-bold">Nama Produk</label>
                           <input type="text" class="form-control" name="nama" id="nama" placeholder="misal:  G-Shock 123 Tahan Air" value="<?= set_value('nama') ?>">
                           <?= form_error('nama', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                        <div class="row">
                           <div class="col-4">
                              <div class="form-group">
                                 <label class="font-weight-bold">Kategori</label>
                                 <select class="custom-select" name="kat_id">
                                    <option value="" selected>-Pilih Kategori-</option>
                                    <?php foreach ($kategoris as $kategori) : ?>
                                       <option value="<?= $kategori->id_kat ?>" <?= set_select('kat_id', $kategori->id_kat); ?>>
                                          <?= $kategori->nama_kat ?>
                                       </option>
                                    <?php endforeach; ?>
                                 </select>
                                 <?= form_error('kat_id', '<small class="text-danger pl-1">', '</small>') ?>
                              </div>
                           </div>
                           <div class="col-8">
                              <div class="form-group">
                                 <label class="font-weight-bold">Gambar (500x500 Pixel)</label>
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label class="custom-file-label" for="customFile">Pilih gambar..</label>
                                    <?= form_error('gambar', '<small class="text-danger pl-1">', '</small>') ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-4">
                              <div class="form-group">
                                 <label class="font-weight-bold">Harga</label>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" name="harga" id="harga" placeholder="0" value="<?= set_value('harga') ?>">
                                    <div class="input-group-append">
                                       <span class="input-group-text">,-</span>
                                    </div>
                                 </div>
                                 <?= form_error('harga', '<small class="text-danger pl-1">', '</small>') ?>
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="form-group">
                                 <label class="font-weight-bold">Diskon</label>
                                 <div class="input-group">
                                    <input type="number" class="form-control" name="diskon" id="diskon" placeholder="0" value="<?= set_value('diskon') ?>">
                                    <div class="input-group-append">
                                       <span class="input-group-text">%</span>
                                    </div>
                                 </div>
                                 <?= form_error('diskon', '<small class="text-danger pl-1">', '</small>') ?>
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="form-group">
                                 <label class="font-weight-bold">Berat</label>
                                 <div class="input-group">
                                    <input type="number" class="form-control" name="berat" id="berat" placeholder="0" value="<?= set_value('berat') ?>">
                                    <div class="input-group-append">
                                       <span class="input-group-text">Gram</span>
                                    </div>
                                 </div>
                                 <?= form_error('berat', '<small class="text-danger pl-1">', '</small>') ?>
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="form-group">
                                 <label class="font-weight-bold">Stok</label>
                                 <input type="number" class="form-control" name="stok" id="stok" placeholder="0" value="<?= set_value('stok') ?>">
                                 <?= form_error('stok', '<small class="text-danger pl-1">', '</small>') ?>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-group">
                              <label class="font-weight-bold">Deskripsi Produk</label>
                              <textarea class="form-control summernote" name="deskripsi" id="deskripsi">
                                 <?= set_value('deskripsi') ?>
                              </textarea>
                              <?= form_error('deskripsi', '<small class="text-danger pl-1">', '</small>') ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                     <i class="fa fa-save"></i> &nbsp; Simpan Perubahan
                  </button>
                  <a href="<?= site_url('seller/produk') ?>" class="btn btn-warning">
                     <i class="fa fa-reply"></i> &nbsp; Batal / Kembali
                  </a>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- content -->

</div>
<?php $this->load->view('templates/footer_back') ?>

<!-- custom script -->
<script>

</script>
<!-- custom script -->
</body>

</html>