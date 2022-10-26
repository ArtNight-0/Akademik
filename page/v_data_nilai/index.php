<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-sm btn-primary mx-3 mt-3 mb-2" href="../v_data_nilai/tambah.php">+Tambah Data</a>
    <div class="halaman">
    <table class="table table-striped">
        <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Matakuliah</th>
        <th>Dosen</th>
        <th>Kehadiran</th>
        <th>Tugas</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>AKSI</th>
        </tr>
        <?php
        include '../../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from nilai,mahasiswa,matakuliah,dosen where nilai.npm = mahasiswa.npm and nilai.kd_mk = matakuliah.kd_mk and nilai.kd_dosen = dosen.kd_dosen");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['nama_mk']; ?></td>
            <td><?php echo $d['nama_dosen']; ?></td>
            <td><?php echo $d['nhadir']; ?></td>
            <td><?php echo $d['ntugas']; ?></td>
            <td><?php echo $d['uts']; ?></td>
            <td><?php echo $d['uas']; ?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="../v_data_nilai/edit.php?kd_mk=<?php echo $d['id']; ?>">EDIT</a>
                <a class="btn btn-sm btn-danger" href="../v_data_nilai/delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
<?php
    }
?>
    </table>
    </div>    
</body>
</html>