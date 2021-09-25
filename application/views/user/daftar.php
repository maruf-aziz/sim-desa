<!-- 
THEME: Small Apps | Bootstrap App Landing Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/small-apps-free-app-landing-page-template/
DEMO: https://demo.themefisher.com/small-apps/
GITHUB: https://github.com/themefisher/Small-Apps-Bootstrap-App-Landing-Template

Get HUGO Version : https://themefisher.com/products/small-apps-hugo-app-landing-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Sistem Informasi Surat Menyurat</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>plugins/slick/slick.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="<?= base_url('assets/frontend/') ?>css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="<?= base_url('assets/frontend/') ?>images/Login/sign-up.jpg" alt="desk-image">
					</div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="index.html"><img src="<?= base_url('assets/frontend/') ?>images/logo.png" alt=""></a>
						</div>
						<div class="title-text">
							<h2><strong>Daftar Akun Baru</strong></h2>
						</div>
						<form action="#">
							<!-- Username -->
							<div class="row">
                                <div class="col-md-12">
                                    <input class="form-control main" type="text" placeholder="Nama Lengkap" required>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control main" type="text" placeholder="Username" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control main" type="password" placeholder="Password" required autocomplate="off">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control main" type="text" placeholder="NIK" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control main" type="date" placeholder="Tanggal Lahir" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control main" type="text" placeholder="Agama" required>
                                </div>
                                <div class="col-md-6">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                                </div>
                            </div>
                            
							
							<input class="form-control main" type="text" placeholder="Alamat" required>
							<!-- Submit Button -->
							<button class="btn btn-main-md">Daftar</button>
						</form>
						<div class="new-acount">
							
							<p>Apakah Sudah Memiliki Akun?  <a href="<?= base_url() ?>user/masuk">Masuk</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sign Up  ====-->


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/script.js"></script>
</body>

</html>