<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/stylee.css">
    </head>
<body>
    <?php
session_start();
if($_SESSION['status']!="login"){
header("location:page/v_admin/index.php?pesan=belum_login");
}
?>
<!-- <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! -->
<!-- anda telah login.</h4> -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Input Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?page=input_data">Mahasiswa</a></li>
                <li><a class="dropdown-item" href="#">Dosen</a></li>
                <li><a class="dropdown-item" href="#">Mata Kuliah</a></li>
                <li><a class="dropdown-item" href="#">Nilai</a></li>
              </ul>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=tentang">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <a href="logout.php">LOGOUT</a> -->
    <!-- <div class="navbar ">
        <ul>
        <li><a href="index.php?page=home">HOME</a></li>
        <li><a href="index.php?page=tentang">LAPORAN</a></li>
        <li><a href="index.php?page=tutorial">ABOUT</a></li>
        </ul>
    </div> -->
        <div class="badan">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                    case 'input_data':
                    include "../v_data_mahasiswa/index.php";
                    break;
                    case 'tentang':
                    include "../v_about/about.php";
                    break;
                    case 'tutorial':
                    include "../v_tutor/tutor.php";
                    break;
                    default:
                       echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                     break;
                    }
                }else{
                    include "../v_data_mahasiswa/index.php";
            }
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>