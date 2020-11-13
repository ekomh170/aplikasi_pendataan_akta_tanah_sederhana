<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>
<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Akta Tanah</div>
	<div class="float-right">
		<form class="form-inline" action="index.php" method="get">
			<div class="col-12">
				Form Pencarian Data :
				<?php if (@$_GET['kata_cari'] == @$_GET['kata_cari']): ?>				
					<input class="form-control mr-sm-2" type="text" placeholder="Cari Data = <?= @$_GET['kata_kunci'];?>" aria-label="Search" name="kata_kunci">
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
					<th scope="col">Nomer Akta</th>
					<th scope="col">Judul Akta</th>
					<th scope="col">Pemilik Tanah</th>
					<th scope="col">Kewarganegaraan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<?php 
			include '../../config/koneksi.php';
			if(isset($_GET['kata_kunci'])){
				$judul_akta = $_GET['kata_kunci'];
				$pemilik_akta = $_GET['kata_kunci'];
				$kewarganegaraan = $_GET['kata_kunci'];
				$nomor_akta = $_GET['kata_kunci'];
				$data = mysqli_query($koneksi,"SELECT * FROM tb_akta as tb_ak INNER JOIN tb_pemilik_akta as tb_pa on tb_ak.id_pemilik_akta = tb_pa.id_pemilik_akta WHERE judul_akta LIKE '%".$judul_akta."%' OR nama_panjang LIKE '%".$pemilik_akta."%' OR kewarganegaraan LIKE '%".$kewarganegaraan."%' OR nomor_akta LIKE '%".$nomor_akta."%'");			
			}else{
				$data = mysqli_query($koneksi,"SELECT * FROM tb_akta as tb_ak INNER JOIN tb_pemilik_akta as tb_pa on tb_ak.id_pemilik_akta = tb_pa.id_pemilik_akta");	
			}

			$no = 1;
			foreach ($data as $dt => $value) { ?>
				<tbody>
					<tr>
						<th><?= $no++; ?></th>
						<td><?= $value['nomor_akta']; ?></td>
						<td><?= $value['judul_akta']; ?></td>
						<td><?= $value['nama_panjang']; ?></td>
						<td><?= $value['kewarganegaraan']; ?></td>
						<td>
							<a href="detail.php?id=<?= $value['id_akta']; ?>"><button class="btn btn-warning">Selengkapnya</button></a>
							<?php
							@session_start(); 
							if (@$_SESSION['role'] == "Admin"): ?>
								<a href="ubah.php?id=<?= $value['id_akta']; ?>"><button class="btn btn-warning">Ubah</button></a>
								<a href="hapus.php?id=<?= $value['id_akta']; ?>"><button class="btn btn-warning">Hapus</button></a>
							<?php endif ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php include '../../layout/footer.php' ?>