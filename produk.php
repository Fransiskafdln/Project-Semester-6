<?php
  include 'db.php';

  if($_GET['kat'] != ''){
    $where = " AND kategori_id LIKE '%" .$_GET['kat']. "%' ";
  }
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
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <title>Produk SKM Adv</title>
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

  <!-- Produk -->



  <div class="section">
  <div class="judulkategori" style="height:50px; margin-top:50px;
        ">

        <h1 style="font-family: cursive;">NEON BOX</h1>
          
        </div>


    <div class="container" id="container-produk" >
      <?php

          $produk = mysqli_query($conn, "SELECT * FROM d_produk LEFT JOIN d_kategori USING (kategori_id) WHERE produk_status = 1 $where  ORDER BY produk_id DESC");
          if(mysqli_num_rows($produk) > 0) {
            while($p = mysqli_fetch_array($produk)){
        ?>

        <div class="col-4" >
          <div class="img">
          <img src="produk/<?php echo $p['produk_img']?>" alt="">
          </div>

          <div class="nama">
          <p class="nama"><?php echo $p['produk_nama']?></p>
          </div>

          <div class="harga">
          <p class="harga">Rp<?php echo number_format($p['produk_harga'])  ?></p>
          </div>
          
          <a  href="produk-detail.php?id=<?php echo $p['produk_id'] ?>">
          <button class="btn-detail" style="background-color:#ffc107;color:black;margin-top:15px;margin-left: 5px;width:min-content; height:40px; text-align:center">Detail</button>
          </a>

          <a  href="produk-form.php?id=<?php echo $p['produk_id'] ?>">
          <button class="btn-detail" style="margin-top:15px;margin-left: 5px;width:min-content; height:40px; text-align:center">Order</button>
          </a>
              
        </div>
        <?php }} else { ?>
          <p> Produk Tidak Ada</p>
        <?php } ?>
        </div>
  </div>



  <hr>
  <p id="footer" style="text-align: center"> COPYRIGHT © Saka Karya Maju Advertising Cirebon</p>

















  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>