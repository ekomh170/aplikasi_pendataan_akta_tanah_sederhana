<?php 

if ($_POST['submit']) {
	
	include '../../../config/koneksi.php';
	$nama_panjang = $_POST['nama_panjang'];
	$nama_pendek = $_POST['nama_pendek'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$status_diri = $_POST['status_diri'];

	if ($nama_panjang == null && $nama_pendek = null && $alamat = null && $tempat_lahir = null && $tanggal_lahir = null && $kewarganegaraan = null && $status_diri = null) {
		echo "Form Harus Di isi!!";
	}
	
	mysqli_query($koneksi,"INSERT INTO tb_pemilik_akta VALUES('','$nama_panjang', '$nama_pendek', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$kewarganegaraan', '$status_diri')") or die(mysqli_error($koneksi));
	
	echo "
	<script>
	alert('Data Berhasil DiTambahkan');
	document.location.href = '../index.php';
	</script>";

}

echo "
	<script>
	alert('Anda Terdeteksi Ingin Merusak System');
	document.location.href = '../index.php';
	</script>";


?>