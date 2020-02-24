<?php $this->load->view('templates/header_front') ?>

<!-- daftar produk desktop version -->
<div class="row hide-on-med-and-down">
   <!-- produk terpopuler -->
   <div class="section">
      <h5 class="center">Produk Terpopuler</h5>
      <div class="row">
         <?php foreach ($produks as $produk) : ?>
            <div class="col s12 m2">
               <div class="card hoverable">
                  <div class="card-image">
                     <img src="<?= base_url('upload/baju.jpg') ?>">
                     <a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow darken-4"><i class="material-icons">shopping_basket</i></a>
                  </div>
                  <div class="card-content">
                     <p class="center"><?= $produk->nama_produk ?></p>
                     <p class="center"><del>Rp. 300.000</del></p>
                     <p class="center">
                        <a class="waves-effect waves-light btn-small green">
                           Rp. <?= rupiah($produk->harga) ?>
                        </a>
                     </p>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
   <!-- produk terpopuler -->

   <!-- semua produk -->
   <div class="row">
      <h5 class="center">Semua produk</h5>
      <?php foreach ($produks as $produk) : ?>
         <div class="col s12 m2">
            <div class="card hoverable">
               <div class="card-image">
                  <img src="<?= base_url('upload/produk/' . $produk->gambar_produk) ?>">
                  <a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow darken-4"><i class="material-icons">shopping_basket</i></a>
               </div>
               <div class="card-content">
                  <p class="center"><?= $produk->nama_produk ?></p>
                  <?php
                  if ($produk->diskon > 0) {
                     $hitung  = ($produk->diskon / 100) * $produk->harga;
                     $hasil   = $hitung + $produk->harga;
                     echo '<p class="center"><del>Rp. ' . rupiah($hasil) . '</del></p>';
                  }
                  ?>
                  <p class="center">
                     <a class="waves-effect waves-light btn-small green">
                        Rp. <?= rupiah($produk->harga) ?>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
   <!-- semua produk -->

</div>
<!-- daftar produk desktop version -->

<!-- daftar produk mobile version -->

<!-- daftar produk mobile version -->

<?php $this->load->view('templates/footer_front') ?>
</body>

</html>