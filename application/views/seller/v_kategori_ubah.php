<?php $this->load->view('templates/header_back') ?>

<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-list-alt"></i> Ubah Kategori</h1>
   </div>
   <!-- end Page Heading -->

   <!-- content -->
   <div class="row">
      <div class="col-3">
         <div class="card shadow mb-4">
            <div class="card-body">
               <img src="<?= base_url('upload/kategori/' . $kategori->gambar_kat) ?>" class="img-thumbnail rounded mx-auto d-block">
            </div>
         </div>
      </div>
      <div class="col-9">
         <div class="card shadow mb-4">
            <div class="card-body">
               <form action="<?= site_url('seller/kategori/update/' . $kategori->id_kat) ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label class="font-weight-bold">Nama Kategori</label>
                           <input type="text" class="form-control" name="nama" id="nama" value="<?= $kategori->nama_kat ?>">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label class="font-weight-bold">Gambar</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="gambar" id="gambar">
                              <label class="custom-file-label" for="customFile">Pilih gambar..</label>
                              <small class="pl-1 text-muted">Kosongkan jika anda tidak ingin mengganti gambar</small>
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

   <!-- end page table -->
</div>
<!-- end container-fluid -->

<?php $this->load->view('templates/footer_back') ?>

<!-- custom script -->
<script>

</script>
<!-- custom script -->
</body>

</html>