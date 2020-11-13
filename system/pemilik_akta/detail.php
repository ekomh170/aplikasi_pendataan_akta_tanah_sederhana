<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<div class="container text-center mt-5">
	<?php
	include '../../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta WHERE id_pemilik_akta ='$id'");		
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="card" style="width: 70rem;">
			<div class="card-body">
				<h5 class="card-title">Data Lengkap Pemilik Akta</h5>
				<hr>
				<div class="card-text"><b>Nama Lengkap : </b><?= $d['nama_panjang'] ?></div>
				<div class="card-text"><b>Nama Panggilan : </b><?= $d['nama_pendek'] ?></div>
				<div class="card-text"><b>Alamat : </b><?= $d['alamat'] ?></div>
				<div class="card-text"><b>Tempat Lahir / Tanggal Lahir : </b><?= $d['tempat_lahir'] ?> / <?= $d['tanggal_lahir'] ?></div>
				<div class="card-text"><b>Kewarganegaraan : </b><?= $d['kewarganegaraan'] ?></div>
				<div class="card-text"><b>Status : </b><?= $d['status_diri'] ?></div>
				<br>
				<a href="print/detail_print.php?id=<?= $id; ?>" class="btn btn-danger" target="_BLANK">Print Data</a> | 
				<a href="index.php" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	<?php } ?>
</div>
<?php include '../../layout/footer.php' ?>