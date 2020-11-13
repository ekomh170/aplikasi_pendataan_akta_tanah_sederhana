<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<div class="container text-center mt-5">
	<div class="row">
		<div class="col-6 mt-3">
			<?php
			include '../../config/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_akta as tb_ak INNER JOIN tb_pemilik_akta as tb_pa on tb_ak.id_pemilik_akta = tb_pa.id_pemilik_akta WHERE id_akta='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="card" style="width: 70rem;">
					<div class="card-body">
						<h5 class="card-title">Data Lengkap Akta</h5>
						<hr>
						<div class="card-text"><b>Nomer Akta : </b><?= $d['nomor_akta'] ?></div>
						<div class="card-text"><b>Judul Akta : </b><?= $d['judul_akta'] ?></div>
						<div class="card-text"><b>Kelurahan : </b><?= $d['kelurahan'] ?></div>
						<div class="card-text"><b>Kecamatan : </b><?= $d['kecamatan'] ?></div>
						<div class="card-text"><b>Kabupaten : </b><?= $d['kabupaten'] ?></div>
						<div class="card-text"><b>Pemilik Akta : </b><?= $d['nama_panjang'] ?></div>
						<div class="card-text"><b>Di buat : </b><?= $d['created_akta'] ?></div>
						<br>
						<a href="print/detail_print.php?id=<?= $id; ?>" class="btn btn-danger" target="_BLANK">Print Data</a> | 
						<a href="index.php" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include '../../layout/footer.php' ?>