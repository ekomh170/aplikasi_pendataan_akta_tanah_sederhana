<?php 

include '../../config/koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE email = '$email' AND password = '$password'");
$cek_baris = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);


if ($cek_baris) {
	if ($row['role'] == "Admin" || $row['role'] == "Pembimbing") {
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;	
		$_SESSION['role'] = $row['role'];
		echo "
		<script>
		alert('Selamat Datang! Login Berhasil:)');
		document.location.href = '../../system/akta_tanah/index.php';
		</script>";	
	}else if(!$role['role']) {
		echo "
		<script>
		alert('Role Anda Tidak Memiliki Akses Untuk Mengakses Menu Utama');
		document.location.href = '../masuk.php'
		</script>";
	}
}elseif (!$cek_baris) {
	echo "
	<script>
	alert('Akun Anda Tidak Dapat Diakses Karena Belum Terdata Harap Buat Akun');
	document.location.href = '../masuk.php'
	</script>";
}
