<?php 
include '../../config/akses_block.php';
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_akta WHERE id_akta='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Akta Tanah Berhasil Dihapus');
document.location.href = 'index.php';
</script>";

?>