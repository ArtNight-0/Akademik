<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kdmk = $_POST['kd_mk'];
$namamk = $_POST['nama_mk'];
$sks = $_POST['sks'];
// menginput data ke database
mysqli_query($koneksi,"insert into matakuliah values('$kdmk','$namamk','$sks')");
// mengalihkan halaman kembali ke index.php
header('location: ../v_data_matakuliah/index.php');
?>