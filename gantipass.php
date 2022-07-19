<?php 
	include "config.php" ;
    session_start();

    //proeses ganti password
   if(isset($_POST['Ganti'])){
    $nidn =  $_SESSION['nidn'];
    $password_lama = $_POST['password_lama'];
    $password_baru = $_POST['password_baru'];
    $konf_password = $_POST['konf_password'];
   }

   //check password lama

   $sql = "SELECT * FROM karyawan WHERE nidn='$nidn' AND password='$password_lama'";
   $result = mysqli_query($db_handle, $sql);
   if (! $hasil >= 1) {
       ?>
           <script language="JavaScript">
           alert('Password lama tidak sesuai!, silahkan ulang kembali!');
           document.location='index.php';
           </script>
       <?php
           unset($_SESSION['nidn']);
           unset($_SESSION['nama']);
           session_destroy();
   }
	
?>