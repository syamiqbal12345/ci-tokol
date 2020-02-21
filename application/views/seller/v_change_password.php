<?php $this->load->view('templates/header_back') ?>

<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-cog"></i> Ubah Password</h1>
   </div>
   <!-- end Page Heading -->

   <!-- notif -->
   <div class="row">
      <div class="col-7">
         <?= $this->session->flashdata('notif') ?>
      </div>
   </div>
   <!-- notif -->

   <!-- content -->
   <div class="row">
      <div class="col-7">
         <div class="card shadow mb-4">
            <div class="card-body">
               <form action="<?= site_url('seller/auth/change-password') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label class="font-weight-bold">Password Baru</label>
                           <input type="password" class="form-control" name="password1" id="password1" placeholder="ketikkan password baru disini..">
                           <?= form_error('password1', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                        <div class="form-group">
                           <label class="font-weight-bold">Ulangi Password Baru</label>
                           <input type="password" class="form-control" name="password2" id="password2" placeholder="ulangi password baru..">
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                     <i class="fa fa-save"></i> &nbsp; Simpan Perubahan
                  </button>
                  <a href="<?= site_url('seller/beranda') ?>" class="btn btn-warning">
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