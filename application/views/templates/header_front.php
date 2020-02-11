<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title><?= TITLE ?></title>

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
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-home"></i>
               <span>Beranda</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Daftar Kategori</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-store"></i>
               <span>Daftar Toko</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-cubes"></i>
               <span>Semua Produk</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-truck"></i>
               <span>Menjadi Penjual</span>
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
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Cari produk di sini..." aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                           <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
               </form>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                           <div class="input-group">
                              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                 <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </li>

                  <!-- Nav Item - Alerts -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-heart fa-fw text-dark"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-warning badge-counter">3</span>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                           Favorit
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                              <div class="status-indicator bg-success"></div>
                           </div>
                           <div class="font-weight-bold">
                              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                              <div class="small text-gray-500">Emily Fowler · 58m</div>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                              <div class="status-indicator"></div>
                           </div>
                           <div>
                              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                              <div class="small text-gray-500">Jae Chun · 1d</div>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                              <div class="status-indicator bg-warning"></div>
                           </div>
                           <div>
                              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                              <div class="status-indicator bg-success"></div>
                           </div>
                           <div>
                              <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                              <div class="small text-gray-500">Chicken the Dog · 2w</div>
                           </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">
                           Lihat lebih
                        </a>
                     </div>
                  </li>

                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-cart fa-fw text-dark"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-success badge-counter">7</span>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                           Keranjang
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                              <div class="status-indicator bg-success"></div>
                           </div>
                           <div class="font-weight-bold">
                              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                              <div class="small text-gray-500">Emily Fowler · 58m</div>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                              <div class="status-indicator"></div>
                           </div>
                           <div>
                              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                              <div class="small text-gray-500">Jae Chun · 1d</div>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                              <div class="status-indicator bg-warning"></div>
                           </div>
                           <div>
                              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                           </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                              <div class="status-indicator bg-success"></div>
                           </div>
                           <div>
                              <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                              <div class="small text-gray-500">Chicken the Dog · 2w</div>
                           </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">
                           Detail Keranjang
                        </a>
                     </div>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-secondary small">Valerie Luna</span>
                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profile
                        </a>
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                           Settings
                        </a>
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                           Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </a>
                     </div>
                  </li>

               </ul>

            </nav>
            <!-- End of Topbar -->