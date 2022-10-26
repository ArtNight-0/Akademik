<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form

$npm = $_POST['npm'];
$kdmk = $_POST['kd_mk'];
$kddosen = $_POST['kd_dosen'];
$nhadir = $_POST['nhadir'];
$ntugas = $_POST['ntugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

// menginput data ke database
mysqli_query($koneksi,"insert into nilai values(' ','$npm','$kddosen','$kdmk','$nhadir','$ntugas','$uts','$uas')");
// mengalihkan halaman kembali ke index.php
header('location: ../v_data_nilai/index.php');
?>