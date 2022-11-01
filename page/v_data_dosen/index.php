<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylee.css">
    <title>Document</title>
</head>
<body>
    <div class="container title mt-4 text-center">
    <h2>Tabel Dosen</h2>
  </div>
    <div class="halaman col-8 mx-auto">
        <a class="btn btn-sm btn-primary mt-4 mb-3" href="../v_data_dosen/tambah.php">+Tambah Data</a>
    <table class="table table-striped">
        <tr>
        <th>KD Dosen</th>
        <th>Nama Dosen</th>
        <th>Email</th>
        <th>No Hp</th>
        <th>AKSI</th>
        </tr>
        <?php
        include '../../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from dosen");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>    
            <td><?php echo $d['kd_dosen']; ?></td>
            <td><?php echo $d['nama_dosen']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="../v_data_dosen/edit.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">EDIT</a>
                <a class="btn btn-sm btn-danger" href="../v_data_dosen/delete.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">HAPUS</a>
            </td>
        </tr>
<?php
    }
?>
    </table>
    </div>    
</body>
</html>