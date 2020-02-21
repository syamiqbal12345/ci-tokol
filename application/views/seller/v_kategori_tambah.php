<?php $this->load->view('templates/header_back') ?>

<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-list-alt"></i> Tambah Kategori</h1>
   </div>
   <!-- end Page Heading -->

   <!-- content -->
   <div class="row">
      <div class="col-7">
         <div class="card shadow mb-4">
            <div class="card-body">
               <form action="<?= site_url('seller/kategori/tambah') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label class="font-weight-bold">Nama Kategori</label>
                           <input type="text" class="form-control" name="nama" id="nama" placeholder="misal:  jam tangan" value="<?= set_value('nama') ?>">
                           <?= form_error('nama', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                        <div class="form-group">
                           <label class="font-weight-bold">Gambar</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="gambar" id="gambar" required>
                              <label class="custom-file-label" for="customFile">Pilih gambar..</label>
                              <small class="text-muted pl-1">Resolusi gambar 125x125 Pixel</small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                     <i class="fa fa-save"></i> &nbsp; Simpan Perubahan
                  </button>
                  <a href="<?= site_url('seller/kategori') ?>" class="btn btn-warning">
                     <i class="fa fa-reply"></i> &nbsp; Batal / Kembali
                  </a>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('templates/footer_back') ?>

<!-- custom script -->
<script>

</script>
<!-- custom script -->
</body>

</html>