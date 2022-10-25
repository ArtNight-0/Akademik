<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php
include '../../koneksi.php';
$kddosen = $_GET['kd_dosen'];
$data = mysqli_query($koneksi,"select * from dosen where kd_dosen='$kddosen'");
while($d = mysqli_fetch_array($data)){
?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Kode Dosen</td>
                <td>
                <input type="hidden" name="kd_dosen" value="<?php echo $d['kd_dosen'];
                ?>">
                <input type="text" name="kd_dosen" value="<?php echo $d['kd_dosen'];
                ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="nama_dosen" value="<?php echo
                $d['nama_dosen']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo
                $d['email']; ?>"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="no_hp" value="<?php echo
                $d['no_hp']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
<?php
}
?>
</body>
</html>