<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title><?= TITLE ?> - Penjual</title>

   <link rel="shortcut icon" href="<?= base_url('upload/shop.png') ?>" type="image/x-icon">

   <!-- Custom fonts for this template-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/css/sb-admin-2.min.css" rel="stylesheet">

   <!-- owl carousel -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon">
               <!-- <i class="fas fa-store"></i> -->
               <img src="<?= base_url('upload/shop.png') ?>" alt="<?= TITLE ?>" width="40" height="40">
            </div>
            <div class="sidebar-brand-text mx-3"><?= TITLE ?></div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            Utama
         </div>

         <!-- Nav Item - utama -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-home"></i>
               <span>Beranda</span>
            </a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('/') ?>" target="_blank">
               <i class="fas fa-fw fa-paper-plane"></i>
               <span>Ke Website</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            Master
         </div>

         <!-- Nav Item - master -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Daftar Kategori</span>
            </a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-cubes"></i>
               <span>Semua Produk</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            Pengaturan
         </div>

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-truck"></i>
               <span>Informasi</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar Search -->
               <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"> -->
               <div id="jam-digital"></div>
               <!-- </form> -->

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-secondary small">Nama Login</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('upload/shop.png') ?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profil
                        </a>
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                           Ubah Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Keluar
                        </a>
                     </div>
                  </li>

               </ul>

            </nav>
            <!-- End of Topbar -->