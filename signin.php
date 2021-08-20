<?php

include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$signin = mysqli_query($conn, "SELECT * FROM d_admin WHERE username = '" .$user. "' AND password = '" .MD5($pass)."'");

if(mysqli_num_rows($signin) == 1)
{
    mysqli_close($conn);
    header("location:dashboard.php");
    exit;	
}
else
{
    mysqli_close($conn);
    header("location:login.php");
    $error = "username atau password salah";
    exit;
}
?>