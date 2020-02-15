<!DOCTYPE html>
<html>

<head>
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <!-- title -->
   <title><?= TITLE ?></title>

   <!-- favicon -->
   <link rel="shortcut icon" href="<?= base_url('upload/shop.png') ?>" type="image/x-icon">

   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
</head>

<body>
   <!-- Navbar utama -->
   <nav id="main-nav">
      <div class="nav-wrapper blue">
         <a href="#!" class="brand-logo" style="margin-left: 15px">
            <img src="<?= base_url('upload/shop.png') ?>" alt="Brand Logo" width="35" height="30">
            <?= TITLE ?>
         </a>

         <!-- tombol menu dan pencarian untuk mobile -->
         <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i class="material-icons">more_vert</i>
         </a>
         <a href="#" id="btn-search-mobile" class="sidenav-trigger right">
            <i class="material-icons">search</i>
         </a>
         <!-- tombol menu dan pencarian untuk mobile -->

         <ul class="right hide-on-med-and-down">
            <li class="active"><a href="Beranda.html"><i class="material-icons right">store</i>Beranda</a></li>
            <li><a href="badges.html"><i class="material-icons right">view_list</i>Kategori</a></li>
            <li><a href="collapsible.html"><i class="material-icons right">dashboard</i>Produk</a></li>
            <li><a href="collapsible.html"><i class="material-icons right">payment</i>Konfirmasi</a></li>
            <li><a href="collapsible.html"><i class="material-icons right">shopping_basket</i>Keranjang <span class="new badge yellow" data-badge-caption="item">4</span></a></li>
            <li><a href="#" id="btn-search-nav"><i class="material-icons right">search</i>Pencarian</a></li>
         </ul>
      </div>
   </nav>
   <!-- Navbar utama -->

   <!-- form pencarian -->
   <div id="search-nav" style="display:none;">
      <nav>
         <div class="nav-wrapper white">
            <form>
               <div class="input-field">
                  <input id="search" type="search" placeholder="ketikkan nama produk disini.." required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons" id="cls-btn-search-nav">close</i>
               </div>
            </form>
         </div>
      </nav>
   </div>
   <!-- form pencarian -->

   <!-- navbar untuk mobile -->
   <ul id="slide-out" class="sidenav white">
      <li>
         <div class="user-view">
            <div class="background">
               <img src="<?= base_url('upload/material.png') ?>" width="100%">
            </div>
            <a href="#user"><img class="circle" src="<?= base_url('upload/shop.png') ?>"></a>
            <a href="#name"><span class="white-text name"><?= TITLE ?></span></a>
         </div>
      </li>
      <li><a href="Beranda.html"><i class="material-icons">store</i>Beranda</a></li>
      <li><a href="badges.html"><i class="material-icons">view_list</i>Kategori</a></li>
      <li><a href="collapsible.html"><i class="material-icons">dashboard</i>Produk</a></li>
      <li><a href="collapsible.html"><i class="material-icons">payment</i>Konfirmasi</a></li>
      <li><a href="collapsible.html"><i class="material-icons">shopping_basket</i>Keranjang <span class="new badge blue" data-badge-caption="item">4</span></a></li>
   </ul>
   <!-- navbar untuk mobile -->