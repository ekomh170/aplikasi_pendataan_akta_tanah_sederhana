<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<?php 
include '../../config/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta");

?>

<div class="container mt-5">
	<div class="h3 text-center">Tambah Data</div>
	<form action="proses/prosestambah.php" method="post">
		<div class="form-group">
			<label for="judul_akta">Judul Akta</label>
			<input type="text" class="form-control" name="judul_akta" placeholder="Masukan Judul Akta" required>
		</div>
		<div class="form-group">
			<label for="kelurahan">Kelurahan</label>
			<input type="text" class="form-control" name="kelurahan" placeholder="Masukan Kelurahan" required>
		</div>
		<div class="form-group">
			<label for="kecamatan">Kecamatan</label>
			<input type="text" class="form-control" name="kecamatan" placeholder="Masukan Kecamatan" required>
		</div>
		<div class="form-group">
			<label for="kabupaten">Kabupaten</label>
			<input type="text" class="form-control" name="kabupaten" placeholder="Masukan Kabupaten" required>
		</div>
		<div class="form-group">
			<label for="id_pemilik_akta">Pemilik Akta</label>
			<select class="form-control" name="id_pemilik_akta">
				<?php foreach ($data as $dt => $value) { ?>
					<option value="<?= $value['id_pemilik_akta'] ?>"><?= $value['nama_panjang'] ?></option>
				<?php } ?>
			</select>
		</div>

		<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah Data</button>
	</form>
	<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
</div>

<?php include '../../layout/footer.php' ?>