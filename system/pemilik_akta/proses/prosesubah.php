<?php 
if ($_POST['submit']) {

	include '../../../config/koneksi.php';
	$id_pemilik_akta = $_POST['id_pemilik_akta'];
	$nama_panjang = $_POST['nama_panjang'];
	$nama_pendek = $_POST['nama_pendek'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$status_diri = $_POST['status_diri'];

	if ($nama_panjang == null && $nama_pendek = null && $alamat = null && $tempat_lahir = null && $tanggal_lahir = null && $id_pemilik_akta = null && $status_diri = null && $kewarganegaraan = null) {
		echo "Form Harus Di isi!!";
	}

	mysqli_query($koneksi,"UPDATE tb_pemilik_akta SET id_pemilik_akta ='$id_pemilik_akta', nama_panjang='$nama_panjang', nama_pendek='$nama_pendek', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kewarganegaraan='$kewarganegaraan', status_diri='$status_diri' WHERE id_pemilik_akta='$id_pemilik_akta'") or die(mysqli_error($koneksi));

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