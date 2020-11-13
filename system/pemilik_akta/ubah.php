<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<div class="container mt-5">
	<?php
	include '../../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tb_pemilik_akta where id_pemilik_akta='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="h3 text-center">Ubah Data Pemilik Akta</div>
		<form action="proses/prosesubah.php" method="post">
			<input type="hidden" name="id_pemilik_akta" value="<?= $d['id_pemilik_akta']; ?>">
			<div class="form-group">
				<label for="nama_panjang">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_panjang" placeholder="Masukan Nama Lengkap" value="<?= $d['nama_panjang']; ?>" required>
			</div>
			<div class="form-group">
				<label for="nama_pendek">Nama Panggilan</label>
				<input type="text" class="form-control" name="nama_pendek" placeholder="Masukan Nama Panggilan" value="<?= $d['nama_pendek']; ?>" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" rows="3" value="<?= $d['alamat']; ?>" required><?= $d['alamat']; ?></textarea>		
			</div>
			<div class="form-group">
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?= $d['tempat_lahir']; ?>" required>
			</div>
			<div class="form-group">
				<label for="tanggal_lahir">Tanggal Lahir</label>
				<input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" value="<?= $d['tanggal_lahir']; ?>" required>
			</div>
			<div class="form-group">
				<label for="kewarganegaraan">Kewarganegaraan</label>
				<input type="text" class="form-control" name="kewarganegaraan" placeholder="Masukan Kewarganegaraan" value="<?= $d['kewarganegaraan']; ?>" required>
			</div>
			<div class="form-group">
				<label for="status_diri">Status Diri</label>
				<select class="form-control" name="status_diri">
					<option value="Lajang">Lajang</option>
					<option value="Menikah">Menikah</option>
					<option value="Janda">Janda</option>
					<option value="Duda">Duda</option>
				</select>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah Data</button>
		</form>
		<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
	<?php } ?>
</div>

<?php include '../../layout/footer.php' ?>