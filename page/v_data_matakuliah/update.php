<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$kdmk = $_POST['kd_mk'];
$namamk = $_POST['nama_mk'];
$sks = $_POST['sks'];
// update data ke database
mysqli_query($koneksi,"update matakuliah set kd_mk='$kdmk',
nama_mk='$namamk', sks='$sks' where kd_mk='$kdmk'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
