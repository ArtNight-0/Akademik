<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="halaman col-8 mx-auto">
        <a class="btn btn-sm btn-primary mx-3 mt-3 mb-2" href="../v_data_matakuliah/tambah.php">+Tambah Data</a>
    <table class="table table-striped">
        <tr>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>AKSI</th>
        </tr>
        <?php
        include '../../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from matakuliah");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['kd_mk']; ?></td>
            <td><?php echo $d['nama_mk']; ?></td>
            <td><?php echo $d['sks']; ?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="../v_data_matakuliah/edit.php?kd_mk=<?php echo $d['kd_mk']; ?>">EDIT</a>
                <a class="btn btn-sm btn-danger" href="../v_data_matakuliah/delete.php?kd_mk=<?php echo $d['kd_mk']; ?>">HAPUS</a>
            </td>
        </tr>
<?php
    }
?>
    </table>
    </div>    
</body>
</html>