<?php
include '../../config/koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM tb_login");
$jumlah = mysqli_num_rows($data);
$akun = $jumlah + 1;

$id_akun = "0" . $akun;
$email = $_POST['email'];
$data_pass = $_POST['password'];
$role = $_POST['role'];
$password = md5($data_pass);

$cek_data = [$id_akun, $email, $data_pass, $role, $password];

if ($cek_data = null) {
	echo "<script>
	alert('Email Tidak Valid');
	document.location.href = '../daftar.php';
	</script>";
} else {
	$data = mysqli_query($koneksi,"INSERT INTO tb_login VALUES('$id_akun', '$email', '$password', '$role')") or die (mysqli_error($koneksi));
}

echo "<script>
alert('Akun Berhasil Di Buat');
document.location.href = '../masuk.php';
</script>";

?>