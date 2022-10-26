<?php
include '../../koneksi.php';
$kdmk = $_GET['kd_mk'];
mysqli_query($koneksi,"DELETE FROM matakuliah WHERE kd_mk='$kdmk'")or die(mysql_error());
header("location:index.php?pesan=hapus");
?>
