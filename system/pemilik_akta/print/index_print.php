<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Pemilik Akta</div>
	<table class="table table-hover mt-2 text-center">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Pemilik Akta</th>
				<th scope="col">Tempat/Tanggal Lahir</th>
				<th scope="col">Kewarganegaraan</th>
			</tr>
		</thead>
		<?php 
		include '../../../config/koneksi.php';
		if(isset($_GET['kata_cari'])){
			$cari = $_GET['kata_cari'];
			$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta WHERE nama_panjang LIKE '%".$cari."%'");			
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
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>