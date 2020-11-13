<?php 
	
	$koneksi = mysqli_connect("localhost", "root", "", "db_akta");

	if (!$koneksi) {
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

 ?>