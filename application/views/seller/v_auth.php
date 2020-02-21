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
</head>

<body class="bg-gradient-primary">

   <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

         <div class="col-xl-10 col-lg-12 col-md-9">
            <!-- notif alert -->
            <div class="mt-5">
               <?= $this->session->flashdata('notif') ?>
            </div>

            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-6 d-none d-lg-block text-center my-auto">
                        <img class="img-fluid" src="<?= base_url('upload/shop.png') ?>" alt="" width="60%">
                     </div>
                     <div class="col-lg-6">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4"><?= TITLE ?> - Penjual</h1>
                           </div>
                           <form class="user" action="<?= site_url('seller/auth') ?>" method="POST">
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-user" name="username" placeholder="ex username : admin_citokol" value="<?= set_value('username') ?>">
                                 <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control form-control-user" name="password" placeholder="Password disini..">
                                 <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                              </div>
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                 M A S U K
                              </button>
                              <hr>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

   <!-- Core plugin JavaScript-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" crossorigin="anonymous"></script>

   <!-- Custom scripts for all pages-->
   <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/js/sb-admin-2.min.js" crossorigin="anonymous"></script>

</body>

</html>