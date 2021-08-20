<?php
  include 'db.php';
  error_reporting(0);
  
  $produk = mysqli_query($conn, "SELECT * FROM d_produk WHERE produk_id = '".$_GET['id']."' ");
  $p = mysqli_fetch_object($produk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <title>Home</title>
</head>

<body>
  <nav class="site-header sticky-top py-1 nav-dark bg-dark">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <img src="img/logoskm.png" alt="image" width="35" height="35">
      <a class="py-2 d-none d-md-inline-block" style="color:white" href="vu-home.php">Home</a>
      <a class="py-2 d-none d-md-inline-block" style="color:white" href="vu-aboutus.php">About Us</a>
      <a class="py-2 d-none d-md-inline-block" style="color:white" href="vu-portfolio.php">Portfolio</a>
      <a class="py-2 d-none d-md-inline-block" style="color:white" href="vu-contact.php">Contact Us</a>
      <a class="py-2 d-none d-md-inline-block" style="color:white" href="vu-logout.php">Logout</a>
    </div>
  </nav>


  <div id="bg">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded" style="margin-top: 40px">

    <div class="detail-img">
        <div class="kolom">
            <img src="produk/<?php echo $p->produk_img ?>" id="produk-img">
        </div>
    </div>

    <div class="detail-img">
        
        <div class="kolom1">
            <h3 class="judul"> <?php echo $p->produk_nama ?></h3>
            <div class="box-harga">
                <h1 id="h1harga"> Rp <?php echo number_format($p->produk_harga)?></h1>
            </div>
            <ul class="nav nav-tabs">
            <li class="nav-item">

                <a class="nav-link active">Detail</a>
            </li></ul>

        <p> <?php echo $p->produk_deskripsi ?></p>
        
    </div>

    <div class="pesan">
    <h3 style="text-align: left; padding-left: 60px; font-weight:bold"> Ketentuan Pemesanan</h3>
        <p style="text-align: left; padding-left: 60px;"> [text] Ketentuan Pemesanan</p>

        <?php
         include 'db.php';
          $produk = mysqli_query($conn, "SELECT * FROM d_produk ORDER BY produk_id ASC");
          while($row = mysqli_fetch_array($produk)){
          ?>
        <a href="produk-form.php?pr=<?php echo $row['produk_id'] ?>">
        <div style="text-align: left; padding-left: 60px;">
        <input type="button" class="button-pesan" value="Isi Form">
        </div>
        </a>
        <?php } ?>

        </div>
    </div>















  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>