<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>
<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Pemilik Akta</div>
	<div class="float-right">
		<form class="form-inline" action="index.php" method="get">
			<div class="col-12">
				Form Pencarian Data :
				<?php if (@$_GET['kata_cari'] == @$_GET['kata_cari']): ?>				
					<input class="form-control mr-sm-2" type="text" placeholder="Cari Data = <?= @$_GET['kata_cari'];?>" aria-label="Search" name="kata_cari">
					<?php else: ?>
						<input class="form-control mr-sm-2" type="text" placeholder="Cari Data" aria-label="Search" name="kata_cari">
					<?php endif ?>
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" value="cari">Cari</button>
				</div>
			</form>
		</div>
		<?php
		@session_start(); 
		if (@$_SESSION['role'] == "Admin"): ?>
			<a href="tambah.php"><button class="btn btn-danger mt-3">Tambah Data</button></a>
		<?php endif ?>
		<a href="print/index_print.php" target="_BLANK"><button class="btn btn-danger mt-3">Print Data</button></a>
		<table class="table table-hover mt-2 text-center">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Pemilik Akta</th>
					<th scope="col">Tempat/Tanggal Lahir</th>
					<th scope="col">Kewarganegaraan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<?php 
			include '../../config/koneksi.php';
			if(isset($_GET['kata_cari'])){
				$nama_panjang = $_GET['kata_cari'];
				$kewarganegaraan = $_GET['kata_cari'];
				$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta WHERE nama_panjang LIKE '%".$nama_panjang."%' OR kewarganegaraan LIKE '%".$kewarganegaraan."%'");			
			}else{
				$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta");	
			}

			$no = 1;
			foreach ($data as $dt => $value) {
				?>
				<tbody>
					<tr>
						<th><?= $no++; ?></th>
						<td><?= $value['nama_panjang']; ?></td>
						<td><?= $value['tempat_lahir']; ?> / <?= $value['tanggal_lahir']; ?></td>
						<td><?= $value['kewarganegaraan']; ?></td>
						<td>
							<a href="detail.php?id=<?= $value['id_pemilik_akta']; ?>"><button class="btn btn-warning">Selengkapnya</button></a>
							<?php
							@session_start(); 
							if (@$_SESSION['role'] == "Admin"): ?>
								<a href="ubah.php?id=<?= $value['id_pemilik_akta']; ?>"><button class="btn btn-warning">Ubah</button></a>
								<a href="hapus.php?id=<?= $value['id_pemilik_akta']; ?>"><button class="btn btn-warning">Hapus</button></a>
							<?php endif ?>

						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php include '../../layout/footer.php' ?>