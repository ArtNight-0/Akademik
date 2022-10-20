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
    <h3>TAMBAH DATA MAHASISWA</h3>
        <form method="post" action="../v_data_mahasiswa/tambah_aksi.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td><input type="number" name="npm"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SIMPAN">
        </form>

    
</body>
</html>