<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Komisi Disiplin - Politeknik Negeri Bandung">
  <meta name="author" content="AIRVTeam">
  <title>UTS - Kosans</title>
  <!-- Favicon -->
  <link href="<?=base_url();?>/assets/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?=base_url();?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?=base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?=base_url();?>/assets/css/argon.css?v=1.1.0" rel="stylesheet">
  <!-- Custom CSS Files -->
  <link type="text/css" href="<?=base_url();?>/assets/css/custom.css" rel="stylesheet">
  <!-- @yield('custom-css') -->
</head>

<body>
<header class="header-global">
	<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-default headroom">
	  <div class="container">
		<a class="navbar-brand mr-lg-5" href="/">
		  <img src="/img/applogo-2.png" alt="Kosans">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbar_global">
		  <div class="navbar-collapse-header">
			<div class="row">
			  <div class="col-6 collapse-brand">
				<a href="/">
					<img src="/img/applogo-2.png" alt="Kosans">
				</a>
			  </div>
			  <div class="col-6 collapse-close">
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
				  <span></span>
				  <span></span>
				</button>
			  </div>
			</div>
		  </div>
		  <ul class="navbar-nav align-items-lg-center ml-lg-auto">
			<li class="nav-item">
			  <a class="nav-link nav-link-icon" href="<?=base_url();?>index.php/c_kamar/display">
				<i class="fa fa-home"></i>
				<span class="nav-link-inner--text">Kamar</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link nav-link-icon" href="<?=base_url();?>index.php/c_cart/display">
				<i class="fa fa-shopping-cart"></i>
				<span class="nav-link-inner--text">Cart</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link nav-link-icon" href="<?=base_url();?>index.php/c_transaksi/display">
				<i class="fa fa-user"></i>
				<span class="nav-link-inner--text">Admin</span>
			  </a>
			</li>
			<!-- <li class="nav-item">
			  <a class="nav-link nav-link-icon" href="/about">
				<i class="fa fa-info-circle"></i>
				<span class="nav-link-inner--text">Tentang Komdis</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link nav-link-icon" href="/report">
				<i class="fa fa-warning"></i>
				<span class="nav-link-inner--text">Pengaduan</span>
			  </a> -->
			</li>
			<!-- <li class="nav-item">
			  <a class="nav-link nav-link-icon" href="">
				<i class="fa fa-info-circle"></i>
				<span class="nav-link-inner--text">Tentang Komdis</span>
			  </a>
			</li> -->
			<li class="nav-item d-lg-block ml-lg-4">
				<?php if($this->session->userdata('username') == NULL){ ?>
			  <a href="<?=base_url();?>index.php/c_account/login" class="btn btn-primary btn-block">
				<span class="btn-inner--icon">
				</span>
				<span class="nav-link-inner--text">Login</span>
			  </a>
				<?php } else { ?>
			  <a href="<?=base_url();?>index.php/c_account/logout" class="btn btn-danger btn-block">
				<span class="btn-inner--icon">
				</span>
				<span class="nav-link-inner--text">Logout</span>
			  </a>
				<?php } ?>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
  </header>
	<main>
		<section class="section section-lg">

			<?=$content_div; ?>
  
			<!-- SVG separator -->
			<div class="separator separator-bottom separator-skew zindex-100">
				<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
				</svg>
			</div>
		</section>
  	</main>
  <footer class="footer">
	<div class="container">
	  <div class="row row-grid align-items-center">
		<div class="col-5 col-sm-3">
		  <img src="/img/applogo-2.png" class="img-footer img-responsive" alt="Kosans">
		</div>
		<div class="col-7 col-sm-9">
		  <p>  </p>
		</div>
	  </div>
	  <hr>
	  <div class="row align-items-center justify-content-md-between">
		<div class="col-md-6">
		  <div class="copyright">
			&copy; <?=date('Y');?> <a href="" target="_blank">AIRVTeam</a>.
		  </div>
		</div>
		<div class="col-md-6">
		  <ul class="nav nav-footer justify-content-end">
			<!-- <li class="nav-item">
			  <a href="/news" class="nav-link">Berita</a>
			</li>
			<li class="nav-item">
			  <a href="/event" class="nav-link">Event</a>
			</li>
			<li class="nav-item">
			  <a href="/about" class="nav-link">Tentang Komdis</a>
			</li>
			<li class="nav-item">
			  <a href="/report" class="nav-link">Pengaduan</a>
			</li>
			<li class="nav-item">
			  <a href="" class="nav-link">Kritik & Saran</a>
			</li> -->
		  </ul>
		</div>
	  </div>
	</div>
  </footer>

  <!-- Core -->
  <script src="/theme/argon-design-system/vendor/jquery/jquery.min.js"></script>
  <script src="/theme/argon-design-system/vendor/popper/popper.min.js"></script>
  <script src="/theme/argon-design-system/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="/theme/argon-design-system/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="/theme/argon-design-system/js/argon.js?v=1.1.0"></script>

  <!-- @yield('custom-js') -->
  
</body>

</html>
