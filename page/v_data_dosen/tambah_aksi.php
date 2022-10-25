<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kddosen = $_POST['kd_dosen'];
$namadosen = $_POST['nama_dosen'];
$email = $_POST['email'];
$nohp = $_POST['no_hp'];
// menginput data ke database
mysqli_query($koneksi,"insert into dosen values('$kddosen','$namadosen','$email','$nohp')");
// mengalihkan halaman kembali ke index.php
header('location: ../v_data_dosen/index.php');
?>