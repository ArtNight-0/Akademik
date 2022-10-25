<?php
include '../../koneksi.php';
$npm = $_GET['npm'];
mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE npm='$npm'")or die(mysql_error());
header("location:index.php?pesan=hapus");
?>
