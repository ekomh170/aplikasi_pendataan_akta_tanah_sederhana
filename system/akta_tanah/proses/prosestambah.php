<?php 

if ($_POST['submit']) {
	
	include '../../../config/koneksi.php';
	$rand = mt_rand(1000000000, 9999999999);
	$nomor_akta = $rand;
	$judul_akta = $_POST['judul_akta'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$created_akta = date("Y-m-d h:i:sa");
	$id_pemilik_akta = $_POST['id_pemilik_akta'];

	if ($nomor_akta == null && $judul_akta = null && $kelurahan = null && $kecamatan = null && $kabupaten = null && $id_pemilik_akta = null && $created_akta = null) {
		echo "Form Harus Di isi!!";
	}
	
	mysqli_query($koneksi,"INSERT INTO tb_akta VALUES('','$nomor_akta', '$judul_akta', '$kelurahan', '$kecamatan', '$kabupaten', '$created_akta', '$id_pemilik_akta')") or die(mysqli_error($koneksi));
	
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