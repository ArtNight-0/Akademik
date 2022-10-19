<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-sm btn-primary mx-3 mt-3 mb-2" href="page/v_data_mahasiswa/index.php">+Tambah Data</a>
    <div class="halaman">
    <table class="table table-striped">
        <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Alamat</th>
        <th>AKSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['npm']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="page/v_data_mahasiswa/edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a class="btn btn-sm btn-danger" href="page/v_data_mahasiswa/edit.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
<?php
}
?>
    </table>
    </div>    
</body>
</html>