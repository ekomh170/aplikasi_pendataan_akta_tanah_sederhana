<?php 
session_start();

session_destroy();

echo "
	<script>
	alert('Anda Telah Keluar Dari Sesi Login');
	document.location.href = 'masuk.php';
	</script>";
?>