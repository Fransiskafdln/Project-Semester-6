<?php

include "db.php";

$idk = $_GET['idk'];

$del = mysqli_query($conn,"DELETE FROM d_kategori WHERE kategori_id='$idk'");

if($del)
{
    mysqli_close($conn);
    header("location:kategori-data.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>
