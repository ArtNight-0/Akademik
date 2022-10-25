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
    <h3>TAMBAH DATA MATA KULIAH</h3>
        <form method="post" action="../v_data_matakuliah/tambah_aksi.php">
            <table>
                <tr>
                    <td>Kode Mata Kuliah</td>
                    <td><input type="text" name="kd_mk"></td>
                </tr>
                <tr>
                    <td>Nama Mata Kuliah</td>
                    <td><input type="text" name="nama_mk"></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td><input type="text" name="sks"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SIMPAN">
        </form>

    
</body>
</html>