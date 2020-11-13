<?php 
if ($_POST['submit']) {

	include '../../../config/koneksi.php';
	$id_akta = $_POST['id_akta'];
	$nomor_akta = $_POST['nomor_akta'];
	$judul_akta = $_POST['judul_akta'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$created_akta = $_POST['created_akta'];
	$id_pemilik_akta = $_POST['id_pemilik_akta'];

	if ($nomor_akta == null && $judul_akta = null && $kelurahan = null && $kecamatan = null && $kabupaten = null && $id_pemilik_akta = null && $created_akta = null) {
		echo "Form Harus Di isi!!";
	}

	mysqli_query($koneksi,"UPDATE tb_akta SET id_akta ='$id_akta', nomor_akta='$nomor_akta', judul_akta='$judul_akta', kelurahan='$kelurahan', kecamatan='$kecamatan', kabupaten='$kabupaten', created_akta='$created_akta', id_pemilik_akta='$id_pemilik_akta' WHERE id_akta='$id_akta'") or die(mysqli_error($koneksi));

	echo "
	<script>
	alert('Data Berhasil DiUbah');
	document.location.href = '../index.php';
	</script>";
}
echo "
<script>
alert('Anda Terdeteksi Ingin Merusak System');
document.location.href = '../index.php';
</script>";

?>