<?php
include 'db.php';
    if(isset($_GET['idp'])){

        $produk = mysqli_query($conn, "SELECT produk_img FROM d_produk WHERE produk_id='".$_GET['idp']."' ");
        $p = mysqli_fetch_object($produk);

        unlink('./produk/' .$p->produk_img);
        $delete = mysqli_query($conn, "DELETE FROM d_produk WHERE produk_id = '".$_GET['idp']."' ");
        echo '<script> window.location="produk-data.php"</script>';
    }
?>

<?php