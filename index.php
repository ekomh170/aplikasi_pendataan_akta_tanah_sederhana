<?php include 'config/uri.php' ?>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-grid.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css.map">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">

	<title>Apps Akta Otentik</title>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="text1 h1 text-center text-light mb-auto">APPS</div>
		<div class="text2 h3 text-center text-light">Akta Tanah</div>
		<a href="auth/masuk.php"><button type="button" class="btn btn-success btn-lg btn-block mb-2">Form Login</button></a>
		<a href="auth/daftar.php"><button type="button" class="btn btn-primary btn-lg btn-block mb-2">Form Daftar</button></a>
		<?php
		@session_start();
		if (@$_SESSION['email']): ?>
			<a href="system/akta_tanah/index.php"><button type="button" class="btn btn-warning btn-lg btn-block text-light mb-2">Kembali Ke Halaman APPS</button></a>
			<a href="auth/keluar_akun.php"><button type="button" class="btn btn-danger btn-lg btn-block mb-2">Keluar Akun</button></a>
		<?php endif ?>

	</div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
</html>