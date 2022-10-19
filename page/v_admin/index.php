<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylee.css">
    </head>
<body>
    <?php
session_start();
if($_SESSION['status']!="login"){
header("location:page/v_admin/index.php?pesan=belum_login");
}
?>
<h4>Selamat datang, <?php echo $_SESSION['username']; ?>!
anda telah login.</h4>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>
    <div class="menu">
        <ul>
        <li><a href="index.php?page=home">HOME</a></li>
        <li><a href="index.php?page=tentang">LAPORAN</a></li>
        <li><a href="index.php?page=tutorial">ABOUT</a></li>
        </ul>
    </div>
        <div class="badan">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                    include "page/v_data_mahasiswa/index.php";
                    break;
                    case 'tentang':
                    include "page/v_about/about.php";
                    break;
                    case 'tutorial':
                    include "page/v_tutor/tutor.php";
                    break;
                    default:
                       echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                     break;
                    }
                }else{
                    include "page/v_data_mahasiswa/index.php";
            }
            ?>
        </div>
    </div>
    
</body>
</html>