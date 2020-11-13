<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container text-center mt-5">
	<?php
	include '../../../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta WHERE id_pemilik_akta ='$id'");		
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="card" style="width: 70rem;">
			<div class="card-body">
				<h5 class="card-title">Data Lengkap Pemilik Akta</h5>
				<hr>
				<div class="card-text">Nama Lengkap : <?= $d['nama_panjang'] ?></div>
				<div class="card-text">Nama Panggilan : <?= $d['nama_pendek'] ?></div>
				<div class="card-text">Alamat : <?= $d['alamat'] ?></div>
				<div class="card-text">Tempat Lahir / Tanggal Lahir : <?= $d['tempat_lahir'] ?> / <?= $d['tanggal_lahir'] ?></div>
				<div class="card-text">Kewarganegaraan : <?= $d['kewarganegaraan'] ?></div>
				<div class="card-text">Status : <?= $d['status_diri'] ?></div>
			</div>
		</div>
	<?php } ?>
</div>
<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>