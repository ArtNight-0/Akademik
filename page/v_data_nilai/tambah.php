<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <a href="../v_data_mahasiswa/index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA NILAI</h3>
        <form method="post" action="../v_data_nilai/tambah_aksi.php">
            <table>
                <tr>
                    <td>NPM</td>
                    <td><select name="npm" id="npm">
                        <option value="">--pilih--</option>
                        <?php 
                        include "../../koneksi.php";
                        $data=mysqli_query($koneksi,"select * from mahasiswa");
                        while ($d=mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?=$d['npm']?>"><?=$d['npm']?></option> 
                        <?php
                          }
                          ?>
                    </select>
                </tr>
                <tr>
                    <td>Matakuliah</td>
                    <td><select name="kd_mk" id="kd_mk">
                        <option value="">--pilih--</option>
                        <?php 
                        include "../../koneksi.php";
                        $data=mysqli_query($koneksi,"select * from matakuliah");
                        while ($d=mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?=$d['kd_mk']?>"><?=$d['nama_mk']?></option> 
                        <?php
                          }
                          ?>
                    </select>
                </tr>
                <tr>
                    <td>Dosen</td>
                    <td><select name="kd_dosen" id="kd_dosen">
                        <option value="">--pilih--</option>
                        <?php 
                        include "../../koneksi.php";
                        $data=mysqli_query($koneksi,"select * from dosen");
                        while ($d=mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?=$d['kd_dosen']?>"><?=$d['nama_dosen']?></option> 
                        <?php
                          }
                          ?>
                    </select>
                </tr>
                <tr>
                    <td>Kehadiran</td>
                    <td><input type="number" max="100" name="nhadir" id="nhadir"></td>
                </tr>
                <tr>
                    <td>Tugas</td>
                    <td><input type="number" max="100" name="ntugas" id="ntugas"></td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td><input type="number" max="100" name="uts" id="uts"></td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td><input type="number" max="100" name="uas" id="uas"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SIMPAN">
        </form>

    
</body>
</html>