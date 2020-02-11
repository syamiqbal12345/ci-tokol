<?php $this->load->view('templates/header_front'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- banner beranda -->
	<div class="row">
		<div class="col">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?= base_url('upload/banner2.jpg') ?>" alt="First slide" height="350">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('upload/banner1.jpg') ?>" alt="second slide" height="350">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('upload/banner3.jpeg') ?>" alt="third slide" height="350">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- banner beranda -->

	<!-- paling Popoluer -->
	<div class="row mt-4">
		<div class="col owl-carousel">
			<div class="card" style="width: 13rem;">
				<img class="card-img-top" src="<?= base_url('upload/sepatu.jpg') ?>" alt="Card image cap">
				<div class="card-body text-center">
					<small class="card-title">Sepatu Vans Abal-Abal</small>
					<br>
					<small><del>Rp. 350.000</del> -65%</small>
					<span class="badge badge-primary">Rp. 150.000,-</span>
					<br><br>
					<a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
					<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-heart"></i></a>
					<a href="#" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i></a>
				</div>
			</div>
			<div class="card" style="width: 13rem;">
				<img class="card-img-top" src="<?= base_url('upload/sandal.jpg') ?>" alt="Card image cap">
				<div class="card-body text-center">
					<small class="card-title">Sandal Swallow Cokelat</small>
					<br>
					<small><del>Rp. 350.000</del> -65%</small>
					<span class="badge badge-primary">Rp. 150.000,-</span>
					<br><br>
					<a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
					<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-heart"></i></a>
					<a href="#" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i></a>
				</div>
			</div>
			<div class="card" style="width: 13rem;">
				<img class="card-img-top" src="<?= base_url('upload/highhell.jpg') ?>" alt="Card image cap">
				<div class="card-body text-center">
					<small class="card-title">HighHell Wanita Kuning</small>
					<br>
					<small><del>Rp. 350.000</del> -65%</small>
					<span class="badge badge-primary">Rp. 150.000,-</span>
					<br><br>
					<a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
					<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-heart"></i></a>
					<a href="#" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i></a>
				</div>
			</div>
			<div class="card" style="width: 13rem;">
				<img class="card-img-top" src="<?= base_url('upload/baju.jpg') ?>" alt="Card image cap">
				<div class="card-body text-center">
					<small class="card-title">Baju Pria Polos</small>
					<br>
					<small><del>Rp. 350.000</del> -65%</small>
					<span class="badge badge-primary">Rp. 150.000,-</span>
					<br><br>
					<a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
					<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-heart"></i></a>
					<a href="#" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i></a>
				</div>
			</div>
			<div class="card" style="width: 13rem;">
				<img class="card-img-top" src="<?= base_url('upload/gamis.jpg') ?>" alt="Card image cap">
				<div class="card-body text-center">
					<small class="card-title">Gamis Wanita</small>
					<br>
					<small><del>Rp. 350.000</del> -65%</small>
					<span class="badge badge-primary">Rp. 150.000,-</span>
					<br><br>
					<a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
					<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-heart"></i></a>
					<a href="#" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i></a>
				</div>
			</div>
			<div class="card" style="width: 13rem;">
				<img class="card-img-top" src="<?= base_url('upload/highhell.jpg') ?>" alt="Card image cap">
				<div class="card-body text-center">
					<small class="card-title">Gamis Wanita</small>
					<br>
					<small><del>Rp. 350.000</del> -65%</small>
					<span class="badge badge-primary">Rp. 150.000,-</span>
					<br><br>
					<a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
					<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-heart"></i></a>
					<a href="#" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- paling populer -->

	<!-- Kupon -->
	<div class="row mt-4">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- kupon -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white text-dark">
	<div class="container my-auto">
		<div class="copyright my-auto">
			<span>
				Ikuti Kami <br> <br>
				<img src="<?= base_url('upload/facebook.png') ?>" alt="fb" width="25" height="25"> &nbsp;
				<img src="<?= base_url('upload/twitter.png') ?>" alt="fb" width="25" height="25"> &nbsp;
				<img src="<?= base_url('upload/instagram.png') ?>" alt="fb" width="25" height="25"> &nbsp;
				<img src="<?= base_url('upload/multimedia.png') ?>" alt="fb" width="25" height="25"> &nbsp;
				<img src="<?= base_url('upload/whatsapp.png') ?>" alt="fb" width="25" height="25"> &nbsp;
				<img src="<?= base_url('upload/telegram.png') ?>" alt="fb" width="25" height="25">
			</span>
			<span class="float-right">
				Copyright &copy; All rights reserved. <?= TITLE . ' ' . date('Y') ?>
			</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php $this->load->view('templates/footer_front'); ?>

<!-- custom script  -->
<script>
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			items: 5,
		})
	});
</script>
<!-- end custom script  -->
</body>

</html>