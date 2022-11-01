<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/stylee.css">
<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP</title>
</head>
<body>
<center>
<h2>LAPORAN<br/></h2>
 
<?php
include '../../koneksi.php';
?>
<a href="cetak.php" target="_blank">CETAK</a>
<br>

<div class="halama"></div>
    <table class="table table-striped">
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
</div>
<br/>
</center>
</body>
</html>