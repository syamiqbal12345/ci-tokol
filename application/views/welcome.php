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
	<!-- Navbar goes here -->
	<nav id="main-nav">
		<div class="nav-wrapper blue">
			<a href="#!" class="brand-logo" style="margin-left: 15px">
				<img src="<?= base_url('upload/shop.png') ?>" alt="Brand Logo" width="35" height="30">
				<?= TITLE ?>
			</a>

			<a href="#" data-target="mobile-demo" class="sidenav-trigger">
				<i class="material-icons">more_vert</i>
			</a>

			<a href="#" id="btn-search-mobile" class="sidenav-trigger right">
				<i class="material-icons">search</i>
			</a>

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

	<ul class="sidenav blue" id="mobile-demo">
		<div class="row">
			<div class="col s12 white-text">
				<h5>Media Sosial</h5>
				<hr>
				<div class="row">
					<div class="col s2">
						<a href="#"><img src="<?= base_url('upload/facebook.png') ?>" alt="fb" width="30" height="30"></a>
					</div>
					<div class="col s2">
						<a href="#"><img src="<?= base_url('upload/twitter.png') ?>" alt="fb" width="30" height="30"></a>
					</div>
					<div class="col s2">
						<a href="#"><img src="<?= base_url('upload/instagram.png') ?>" alt="fb" width="30" height="30"></a>
					</div>
					<div class="col s2">
						<a href="#"><img src="<?= base_url('upload/whatsapp.png') ?>" alt="fb" width="30" height="30"></a>
					</div>
					<div class="col s2">
						<a href="#"><img src="<?= base_url('upload/multimedia.png') ?>" alt="fb" width="30" height="30"></a>
					</div>
					<div class="col s2">
						<a href="#"><img src="<?= base_url('upload/hangout.png') ?>" alt="fb" width="30" height="30"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<h5 class="white-text">Navigasi</h5>
				<hr>
				<ul class="collection">
					<li class="collection-item">
						<div>
							<i class="tiny material-icons">store</i> Beranda
							<a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
						</div>
					</li>
					<li class="collection-item">
						<div>
							<i class="tiny material-icons">view_list</i> Kategori
							<a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
						</div>
					</li>
					<li class="collection-item">
						<div>
							<i class="tiny material-icons">dashboard</i> Produk
							<a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
						</div>
					</li>
					<li class="collection-item">
						<div>
							<i class="tiny material-icons">shopping_basket</i> Keranjang
							<a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
						</div>
					</li>
					<li class="collection-item">
						<div>
							<i class="tiny material-icons">payment</i> Konfirmasi
							<a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</ul>

	<!-- banner here -->
	<div class="carousel carousel-slider">
		<a class="carousel-item" href="#one!"><img src="<?= base_url('upload/iklan.png') ?>"></a>
		<a class="carousel-item" href="#two!"><img src="<?= base_url('upload/iklan3.jpg') ?>"></a>
		<a class="carousel-item" href="#three!"><img src="<?= base_url('upload/iklan2.jpg') ?>"></a>
	</div>

	<!-- kategori terbanyak -->
	<div class="section center grey lighten-4">
		<h5>Kategori Produk Terbanyak</h5>
		<div class="chip yellow darken-1 white-text">
			<img src="<?= base_url('upload/baju.jpg') ?>" alt="Contact Person">
			Pakaian Pria
		</div>
		<div class="chip yellow darken-1 white-text">
			<img src="<?= base_url('upload/gamis.jpg') ?>" alt="Contact Person">
			Pakaian Wanita
		</div>
		<div class="chip yellow darken-1 white-text">
			<img src="<?= base_url('upload/sepatu.jpg') ?>" alt="Contact Person">
			Sepatu Pria
		</div>
		<div class="chip yellow darken-1 white-text">
			<img src="<?= base_url('upload/highhell.jpg') ?>" alt="Contact Person">
			Sepatu Wanita
		</div>
		<div class="chip yellow darken-1 white-text">
			<img src="<?= base_url('upload/jam.jpg') ?>" alt="Contact Person">
			Jam Tangan Pria
		</div>
	</div>

	<!-- produk terpopuler -->
	<div class="section">
		<h5 class="center">Produk Terpopuler</h5>
		<div class="row">
			<div class="col s12 m2">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url('upload/baju.jpg') ?>">
						<a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow">
							<i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<p class="center">Kaos Polos Pria Dan Wanita</p>
						<p class="center"><del>Rp. 300.000</del></p>
						<p class="center">
							<a class="waves-effect waves-light btn-small green">
								<i class="material-icons left">shopping_basket</i> Rp. 150.000
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url('upload/baju.jpg') ?>">
						<a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow"><i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<p class="center">Kaos Polos Pria Dan Wanita</p>
						<p class="center"><del>Rp. 300.000</del></p>
						<p class="center">
							<a class="waves-effect waves-light btn-small green">
								<i class="small material-icons left">shopping_basket</i> Rp. 150.000
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url('upload/baju.jpg') ?>">
						<a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow"><i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<p class="center">Kaos Polos Pria Dan Wanita</p>
						<p class="center"><del>Rp. 300.000</del></p>
						<p class="center">
							<a class="waves-effect waves-light btn-small green">
								<i class="small material-icons left">shopping_basket</i> Rp. 150.000
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url('upload/baju.jpg') ?>">
						<a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow"><i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<p class="center">Kaos Polos Pria Dan Wanita</p>
						<p class="center"><del>Rp. 300.000</del></p>
						<p class="center">
							<a class="waves-effect waves-light btn-small green">
								<i class="small material-icons left">shopping_basket</i> Rp. 150.000
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url('upload/baju.jpg') ?>">
						<a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow"><i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<p class="center">Kaos Polos Pria Dan Wanita</p>
						<p class="center"><del>Rp. 300.000</del></p>
						<p class="center">
							<a class="waves-effect waves-light btn-small green">
								<i class="small material-icons left">shopping_basket</i> Rp. 150.000
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url('upload/baju.jpg') ?>">
						<a class="btn-floating btn-small halfway-fab waves-effect waves-light yellow"><i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<p class="center">Kaos Polos Pria Dan Wanita</p>
						<p class="center"><del>Rp. 300.000</del></p>
						<p class="center">
							<a class="waves-effect waves-light btn-small green">
								<i class="small material-icons left">shopping_basket</i> Rp. 150.000
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer goes here -->
	<footer class="page-footer blue">
		<div class="row">
			<div class="col l5 s12">
				<h5 class="white-text">Tentang Kami</h5>
				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Bantuan</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 1</a></li>
					<li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 2</a></li>
					<li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 3</a></li>
					<li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 4</a></li>
				</ul>
			</div>
			<div class="col l2 s12">
				<h5 class="white-text">Navigasi</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="Beranda.html"><i class="tiny material-icons">store</i> Beranda</a></li>
					<li><a class="grey-text text-lighten-3" href="badges.html"><i class="tiny material-icons">view_list</i> Kategori</a></li>
					<li><a class="grey-text text-lighten-3" href="collapsible.html"><i class="tiny material-icons">dashboard</i> Produk</a></li>
					<li><a class="grey-text text-lighten-3" href="collapsible.html"><i class="tiny material-icons">payment</i> Konfirmasi</a></li>
					<li><a class="grey-text text-lighten-3" href="collapsible.html"><i class="tiny material-icons">shopping_basket</i> Keranjang</a></li>
				</ul>
			</div>
			<div class="col l2 s12">
				<h5 class="white-text">Media Sosial</h5>
				<ul>
					<li>
						<a class="grey-text text-lighten-3 valing-wrapper" href="#!">
							<img src="<?= base_url('upload/facebook.png') ?>" alt="fb" width="13" height="13">
							Facebook
						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3 valing-wrapper" href="#!">
							<img src="<?= base_url('upload/twitter.png') ?>" alt="fb" width="13" height="13">
							Twitter
						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3 valing-wrapper" href="#!">
							<img src="<?= base_url('upload/instagram.png') ?>" alt="fb" width="13" height="13">
							Instagram
						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3 valing-wrapper" href="#!">
							<img src="<?= base_url('upload/whatsapp.png') ?>" alt="fb" width="13" height="13">
							WhatsApp
						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3 valing-wrapper" href="#!">
							<img src="<?= base_url('upload/multimedia.png') ?>" alt="fb" width="13" height="13">
							YouTube
						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3 valing-wrapper" href="#!">
							<img src="<?= base_url('upload/hangout.png') ?>" alt="fb" width="13" height="13">
							Hangout
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Copyright © <?= TITLE . ' - ' . date('Y') ?>
				<a class="right btn-backTop btn-floating btn-small waves-effect waves-light blue" href="#!">
					<i class="tiny material-icons">arrow_upward</i>
				</a>
			</div>
		</div>
	</footer>



	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!-- custom javasript -->
	<script>
		$(document).ready(function() {
			$('.sidenav').sidenav();

			$('.carousel.carousel-slider').carousel({
				fullWidth: true,
				indicators: true,
			});

			$('#btn-search-nav').click(function(e) {
				e.preventDefault();
				$('#search-nav').fadeIn();
				$('#main-nav').hide();
				$('#search').focus();
			});

			$('#btn-search-mobile').click(function(e) {
				e.preventDefault();
				$('#search-nav').fadeIn();
				$('#main-nav').hide();
				$('#search').focus();
			});

			$('#cls-btn-search-nav').click(function(e) {
				e.preventDefault();
				$('#search-nav').hide();
				$('#main-nav').fadeIn();
			});

			$('.btn-backTop').click(function(e) {
				e.preventDefault();
				$("html, body").animate({
					scrollTop: 0
				}, 500);
			});
		});
	</script>
</body>

</html>