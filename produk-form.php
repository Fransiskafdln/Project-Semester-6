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

<body class="form-pemesanan">
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

<div class="container-form">
    <div class="boxform">
        <h1 class="h1-form"> Form Pemesanan</h1>

        <div class="kolom2">
        <table >
            <tr>
            <td class="ket"> Nama Lengkap </td>
            <td style="padding-right: 10px;">  : </td>
            <td>
            <input class="form-control form-control-sm" type="text" >
            </td>
            </tr>

            <tr>
            <td class="ket"> No telepon/hp </td>
            <td style="padding-right: 10px;">  : </td>
            <td><input class="form-control form-control-sm" type="text"></td>
            </tr>

            <tr>
            <td class="ket"> Email </td>
            <td style="padding-right: 10px;"> : </td>
            <td><input class="form-control form-control-sm" type="text"></td>
            </tr>

            <tr>
            <td class="ket"> Alamat Pemasangan Jasa </td>
            <td style="padding-right: 10px;">  : </td>
            <td><input class="form-control form-control-sm" type="text" ></td>
            </tr>

            <tr>
            <td class="ket"> Foto KTP </td>
            <td style="padding-right: 10px;"> : </td>
            <td><input type="file" class="form-control-file" id="exampleFormControlFile1"></td>
            </tr>
        </table>

        

        </div>
        <div class="kolom2"> 
        <table >
            <tr>
            <td class="ket"> File Desain </td>
            <td  style="padding-right: 10px;">  : </td>
            <td> <input type="file" class="form-control-file" id="exampleFormControlFile1"></td>
            </tr>

            <tr>
            <td class="ket">Pengiriman </td>
            <td  style="padding-right: 10px;">  : </td>
            <td>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Kirim</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Kirim+ Pasang</label>
                </div>
            </td>
            </tr>

            <tr>
            <td class="ket"> Kota </td>
            <td  style="padding-right: 10px;">  : </td>
            <td>
                <select class="form-control form-control-sm">
                <option>Pilih Kota</option>
                </select>
            </td>
            </tr>

            <tr>
            <td class="ket"> Kecamatan</td>
            <td  style="padding-right: 10px;">  : </td>
            <td> 
                <select class="form-control form-control-sm">
                <option>Pilih Kecamatan</option>
                </select></td>
            </tr>
        </table>
        
        <a href="">
            <button class="btn-hitung">
                Hitung Biaya Kirim 
            </button>
        </a>
        <div class="total">
        <table>
        <tr>
            <td class="ket"> Total Biaya Pengiriman</td>
            <td  style="padding-right: 10px;">  : </td>
        </tr>

        <tr>
            <td class="ket"> Total Biaya Keseluruhan</td>
            <td  style="padding-right: 10px;">  : </td>
        </tr>
        </table>
        </div>
        </div>
        
      </div>
      <div class="div-submit" ">
      <a href="">
            <button class="btn-submit "style="background-color:#007bff ;">
                Submit
            </button>
        </a>
      <a href="">
            <button class="btn-submit">
                Reset
            </button>
      </a>
        </div>
      
        
    
</div>








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>