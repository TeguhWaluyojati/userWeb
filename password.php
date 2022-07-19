<?php
session_start();
include "config.php";

 if (isset($_SESSION['nidn'])) {
    $nidn = $_SESSION['nidn'];
}
//proeses ganti password
if(isset($_POST['Ganti'])){
$nidn =  $_SESSION['nidn'];
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];
$konf_password = $_POST['konf_password'];

//check password lama
$query = "SELECT * FROM karyawan WHERE nidn= '$nidn' AND pass='$password_lama'";
$sql  = mysqli_query($db_handle, $query);
$hasil = mysqli_num_rows ($sql);
if (! $hasil >= 1) {
    header ("Location: password.php?error=Password Tidak Sesuai!"); 
    exit();
} 
//validasi data data kosong
else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
    header ("Location: password.php?error=Password Baru harus di isi!"); 
    exit();
}
//validasi input konfirm password
else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
    header ("Location: password.php?error=Konfirmasi Password Baru harus di isi!"); 
    exit();
}
else {
//update data
$query  = "UPDATE karyawan SET pass='$password_baru' WHERE nidn='$nidn'";
$sql = mysqli_query($db_handle, $query);
//setelah berhasil update
if ($sql) {
    header ("Location: password.php?error=Password Berhasil di ubah!");   
    exit(); 
} else {
    header ("Location: password.php?error=Password Gagal di ubah!");  
    exit();
}
}
}
 ?>

<html lang="en">
<head>
<style>
      .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    border-radius: 5px;
    margin: 20px auto;
}
</style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
</head>
<body>
    <div class="conteiner">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Ide Solusi Integrasi</h2>
				</div>
				<div class="col-md-12 mt-5">
                <?php if (isset ($_GET ['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php }?>
					<form enctype="multipart/form-data" method="post" action="#">
                    <div class="mb-3">
                    <fieldset disabled>
						  <label class="form-label"></label>
                          <label for="disabledTextInput">NIK</label>
						  <input type="text" name="nidn" class="form-control" placeholder ="<?php echo $_SESSION['nidn']; ?>">
						</div>
                        <div class="mb-3">
                        <fieldset disabled>
						  <label class="form-label"></label>
                          <label for="disabledTextInput">Nama</label>
						  <input type="text" name="nama" class="form-control" placeholder ="<?php echo $_SESSION['nama']; ?>">
						</div>
                        <div class="mb-3">
						  <label class="form-label">Password Lama</label>
						  <input type="password" name="password_lama" class="form-control" >
						</div>
					<div class="mb-3">
						  <label class="form-label">Password Baru</label>
						  <input type="password" name="password_baru" class="form-control" >
						</div>
						<div class="mb-3">
						  <label class="form-label">Konfirmasi Password</label>
						  <input type="password" name="konf_password" class="form-control" >
						</div>
						<div class="mb-3 text-end">
							<button type="submit" class="btn btn-success" name ="Ganti" value ="Ganti">Ganti Password</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>