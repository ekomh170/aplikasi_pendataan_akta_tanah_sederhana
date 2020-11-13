<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Akta Tanah</div>
	<table class="table table-hover mt-2 text-center">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nomer Akta</th>
				<th scope="col">Judul Akta</th>
				<th scope="col">Pemilik Tanah</th>
				<th scope="col">Kewarganegaraan</th>
			</tr>
		</thead>
		<?php 
		include '../../../config/koneksi.php';
		if(isset($_GET['kata_kunci'])){
			$cari = $_GET['kata_kunci'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_akta as tb_ak INNER JOIN tb_pemilik_akta as tb_pa on tb_ak.id_pemilik_akta = tb_pa.id_pemilik_akta WHERE judul_akta LIKE '%".$cari."%'");			
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
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>