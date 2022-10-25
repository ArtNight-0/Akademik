<?php
include '../../koneksi.php';
$kddosen = $_GET['kd_dosen'];
mysqli_query($koneksi,"DELETE FROM dosen WHERE kd_dosen='$kddosen'")or die(mysql_error());
header("location:index.php?pesan=hapus");
?>
