<?php $this->load->view('templates/header_back') ?>

<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-2">
      <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-cubes"></i> Semua Produk</h1>
      <a href="<?= site_url('seller/produk/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fa fa-sm fa-plus"></i> Tambah Produk</a>
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
      <div class="col">
         <div class="card shadow mb-3">
            <div class="card-body">
               <table class="table table-sm table-bordered dataTable" width="100%" cellspacing="0">
                  <thead class="bg-dark text-white">
                     <tr class="text-center">
                        <th width="20">#</th>
                        <th width="150">Gambar</th>
                        <th>Nama Produk</th>
                        <th width="130">Harga</th>
                        <th width="35">Stok</th>
                        <th width="150">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     foreach ($produks as $produk) :
                     ?>
                        <tr>
                           <td class="align-middle"><?= $no++ ?></td>
                           <td class="align-middle text-center">
                              <img class="lazyload" data-src="<?= base_url('upload/produk/' . $produk->gambar_produk) ?>" width="75">
                           </td>
                           <td class="align-middle"><?= $produk->nama_produk ?></td>
                           <td class="align-middle text-right"><span class="float-left">Rp</span><?= rupiah($produk->harga) ?></td>
                           <td class="align-middle text-center"><?= $produk->stok ?></td>
                           <td class="align-middle text-center">
                              <a href="<?= site_url('seller/produk/ubah/' . $produk->slug_produk) ?>" class="btn btn-sm btn-success">
                                 <i class="fa fa-edit"></i> Ubah
                              </a>
                              <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal-<?= $produk->id_produk ?>">
                                 <i class="fa fa-trash"></i> Hapus
                              </button>
                           </td>
                        </tr>

                        <!-- hapus modal-->
                        <div class="modal" id="deleteModal-<?= $produk->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                 <div class="modal-header mx-auto">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus ?</h5>
                                 </div>
                                 <div class="modal-body">
                                    <div class="text-center"><?= $produk->nama_produk ?></div>
                                 </div>
                                 <div class="modal-footer  mx-auto">
                                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">
                                       <i class="fa fa-window-close"></i> &nbsp; Batal
                                    </button>
                                    <a class="btn btn-sm btn-danger" href="<?= site_url('seller/produk/hapus/' . $produk->id_produk) ?>">
                                       <i class="fa fa-check"></i> &nbsp; Hapus
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- hapus modal-->
                     <?php endforeach; ?>
                  </tbody>
               </table>
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