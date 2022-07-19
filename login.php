<?php
session_start();
include "config.php";

if (isset ($_POST['unidn']) && isset($_POST['upassword'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    $unidn = validate($_POST ['unidn']);
    $upassword = validate($_POST ['upassword']);

    if(empty($unidn)){
       header ("Location: index.php?error=NIK harus di isi!");
         exit();
    }else if(empty($upassword)){
        header ("Location: index.php?error=Password harus di isi!");
        exit();
    }else{
        $sql = "SELECT * FROM karyawan WHERE nidn='$unidn' AND pass='$upassword'";
        $result = mysqli_query($db_handle, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row ['nidn']===$unidn && $row['pass']===$upassword){
                $_SESSION['nidn']= $row['nidn'];
                $_SESSION['nama']= $row['nama'];
                header ("Location: home.php");
            exit();
            }else{
                header ("Location: index.php?error=NIDN atau password anda salah!");
            exit();
        }
        }else{
            header ("Location: index.php?error=NIDN atau Password anda salah!");
        exit();
        }
    }

}else{
    header ("Location: home.php");
    exit();
}