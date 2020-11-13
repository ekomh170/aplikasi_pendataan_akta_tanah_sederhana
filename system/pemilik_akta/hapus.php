<?php 
include '../../config/akses_block.php';
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_pemilik_akta WHERE id_pemilik_akta='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Pemilik Akta Berhasil Dihapus');
document.location.href = 'index.php';
</script>";

?>