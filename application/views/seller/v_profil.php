<?php $this->load->view('templates/header_back') ?>

<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-users"></i> Pengaturan Profil</h1>
   </div>
   <!-- end Page Heading -->

   <!-- notif -->
   <div class="row">
      <div class="col">
         <?= $this->session->flashdata('notif') ?>
      </div>
   </div>
   <!-- notif -->

   <!-- content -->
   <div class="row">
      <div class="col-2">
         <div class="card shadow mb-4">
            <div class="card-body">
               <img src="<?= base_url('upload/user/' . $this->session->userdata('avatar')) ?>" class="img-thumbnail rounded mx-auto d-block">
            </div>
         </div>
      </div>
      <div class="col-10">
         <div class="card shadow mb-4">
            <div class="card-body">
               <form action="<?= site_url('seller/auth/change_profile/' . $this->session->userdata('id_user')) ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                           <label class="font-weight-bold">Nama Lengkap</label>
                           <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= $this->session->userdata('nama_lengkap') ?>">
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label class="font-weight-bold">Username</label>
                           <input type="text" class="form-control" name="username" id="username" value="<?= $this->session->userdata('username') ?>">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <div class="form-group">
                           <label class="font-weight-bold">Avatar</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="avatar" id="avatar">
                              <label class="custom-file-label" for="customFile">Pilih gambar..</label>
                              <small class="pl-1 text-muted">Kosongkan jika anda tidak ingin mengganti avatar</small>
                           </div>
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