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
$npm = $_GET['npm'];
$data = mysqli_query($koneksi,"select * from mahasiswa where npm='$npm'");
while($d = mysqli_fetch_array($data)){
?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                <input type="hidden" name="npm" value="<?php echo $d['npm'];
                ?>">
                <input type="text" name="nama" value="<?php echo $d['nama'];
                ?>">
                </td>
            </tr>
            <tr>
                <td>NPM</td>
                <td><input type="number" name="npm" value="<?php echo
                $d['npm']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo
                $d['alamat']; ?>"></td>
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