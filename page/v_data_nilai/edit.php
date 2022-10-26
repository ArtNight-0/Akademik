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
$kdmk = $_GET['kd_mk'];
$data = mysqli_query($koneksi,"select * from matakuliah where kd_mk='$kdmk'");
while($d = mysqli_fetch_array($data)){
?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>
                <input type="hidden" name="kd_mk" value="<?php echo $d['kd_mk'];
                ?>">
                <input type="text" name="kd_mk" value="<?php echo $d['kd_mk'];
                ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td><input type="text" name="nama_mk" value="<?php echo
                $d['nama_mk']; ?>"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td><input type="text" name="sks" value="<?php echo
                $d['sks']; ?>"></td>
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