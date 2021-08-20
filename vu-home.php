<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/vu-style.css">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">


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


  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/jumbotron.jpg);" id="jumhome">
    <div class="container">
      <h1 style="color: white"> Selamat Datang di Website <br> Saka Karya Maju Advertising Cirebon</h1>
      <hr class="my-4" style="color:white">
      <hr class="my-4" style="color:white">
      <hr class="my-4" style="color:white">


      <div class="kategori">
        
          
          <?php 
            include 'db.php';
            $kategori = mysqli_query($conn, "SELECT * FROM d_kategori ORDER BY kategori_id DESC");
            if(mysqli_num_rows($kategori) > 0 ){
              while($k = mysqli_fetch_array($kategori)){
          ?>
          <div class="col-2">
          <img src="img/kategori.png" alt="image" height="65" width="65" > <br/>
          <a style="color: white" href="produk.php?kat=<?php echo $k['kategori_id'] ?>" ><?php echo $k['kategori_name']?></a>
        </div>                 
      <?php }} ?>
      </div>
    </div>
  </div>


  <div class="container" id="pdashboard">
    <div class="row justify-content-center">
      <div class="col-6" id="div-img">
        <img src="img/assets/skm_gatau1.jpg" id="img" alt="image" width="500px" height="500px">
      </div>
      <div class="col-6">
        <img src="img/assets/skm_arkem.jpg" id="img" alt="image" width="500px" height="500px">
      </div>
    </div>
  </div>

    <div class="container" id="pdashboard">
    <div class="row justify-content-center">
      <div class="col-6">
        <img src="img/assets/skm_stp.jpg" id="img" alt="image" width="500px" height="500px">
      </div>
      <div class="col-6">
        <img src="img/assets/skm2.jpg" id="img" alt="image" width="500px" height="500px">
      </div>
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