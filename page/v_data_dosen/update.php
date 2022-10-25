<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$kddosen = $_POST['kd_dosen'];
$namadosen = $_POST['nama_dosen'];
$email = $_POST['email'];
$nohp = $_POST['no_hp'];
// update data ke database
mysqli_query($koneksi,"update dosen set kd_dosen='$kddosen',
nama_dosen='$namadosen', email='$email', no_hp='$nohp' where kd_dosen='$kddosen'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
