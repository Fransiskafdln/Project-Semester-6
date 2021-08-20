<?php 
    include "db.php";
    $cek_user=mysqli_num_rows(mysqli_query("SELECT * FROM user WHERE id='$_POST[id]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="registrasi.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysqli_query("INSERT INTO user (id, first, last, email, phone, password)
        VALUES ('$_POST[id]', '$_POST[first]', '$_POST[last]', '$_POST[email]', '$_POST[phone]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="Index.php";
              </script>';
              exit();
    }
?>