<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <a href="../v_data_dosen/index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA DOSEN</h3>
        <form method="post" action="../v_data_dosen/tambah_aksi.php">
            <table>
                <tr>
                    <td>KD Dosen</td>
                    <td><input type="number" name="kd_dosen"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td><input type="text" name="nama_dosen"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><input type="text" name="no_hp"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SIMPAN">
        </form>

    
</body>
</html>