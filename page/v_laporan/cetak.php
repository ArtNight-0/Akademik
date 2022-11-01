<!DOCTYPE html>
<html>
<head>
<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP -
WWW.MALASNGODING.COM</title>
</head>
<body>
<center>
<h2>DATA LAPORAN BARANG</h2>
<h4>WWW.MALASNGODING.COM</h4>
</center>
<?php
include '../../koneksi.php';
?>
<table border="1" style="width: 100%">
<tr>
<th>ID</th>
<th>NPM</th>
<th>Kode Dosen</th>
<th>Kode Mata Kuliah</th>
<th>Nilai Kehadiran</th>
<th>Nilai Tugas</th>
<th>UTS</th>
<th>UAS</th>
</tr>
<?php
$no = 1;
$sql = mysqli_query($koneksi,"select * from nilai");
while($data = mysqli_fetch_array($sql)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['npm']; ?></td>
<td><?php echo $data['kd_dosen']; ?></td>
<td><?php echo $data['kd_mk']; ?></td>
<td><?php echo $data['nhadir']; ?></td>
<td><?php echo $data['ntugas']; ?></td>
<td><?php echo $data['uts']; ?></td>
<td><?php echo $data['uas']; ?></td>
</tr>
<?php
}
?>
</table>
<script>
window.print();
</script>
</body>
</html>