<?php
session_start();
include "config.php";
if (isset($_SESSION['nidn']) && isset($_SESSION['nama'])){


 ?>
<html lang="en">
<head>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ide Solusi Integrasi</title>
    <link rel="stylesheet" type="text/css" href ="style.css">
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?></h1>
    <div class="container py-5 h-100">
  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam Masuk</th>
      <th scope="col">Jam Pulang</th>
    </tr>
  </thead>
    <?php
     $ambilData=mysqli_query ($db_handle, "SELECT * FROM absensi WHERE nidn='$_SESSION[nidn]'");
    while($tampil = mysqli_fetch_array($ambilData))
     echo"
     <tr>
        <th>$tampil[nidn]</th>
        <th>$tampil[nama]</th>
        <th>$tampil[tanggal]</th>
        <th>$tampil[jam_masuk]</th>
        <th>$tampil[jam_pulang]</th>
    </tr>";
    ?>
    </div>
    </table>
    <br>
    <a href="logout.php">Logout</a>
    <a href="password.php">Edit Password</a>


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php
}else{
    header ("Location: index.php");
    exit();
}
 ?>