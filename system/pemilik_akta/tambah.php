<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<div class="container mt-5">
	<div class="h3 text-center">Tambah Data Pemilik Akta</div>
	<form action="proses/prosestambah.php" method="post">
		<div class="form-group">
			<label for="nama_panjang">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_panjang" placeholder="Masukan Nama Lengkap" required>
		</div>
		<div class="form-group">
			<label for="nama_pendek">Nama Panggilan</label>
			<input type="text" class="form-control" name="nama_pendek" placeholder="Masukan Nama Panggilan" required>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat" rows="3" required></textarea>		
		</div>
		<div class="form-group">
			<label for="tempat_lahir">Tempat Lahir</label>
			<input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required>
		</div>
		<div class="form-group">
			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" required>
		</div>
		<div class="form-group">
			<label for="kewarganegaraan">Kewarganegaraan</label>
			<input type="text" class="form-control" name="kewarganegaraan" placeholder="Masukan Kewarganegaraan" required>
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
</div>

<?php include '../../layout/footer.php' ?>