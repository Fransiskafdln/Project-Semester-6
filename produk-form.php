<?php
  include 'db.php';
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


  <title>Form Pemesanan</title>
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
        <h2 name="harga"style="float:right; font-weight:bold; color:#F08519"> Rp <?php echo  number_format($p->produk_harga) ?></h2>
        
          
          <form action="form-simpan.php" method="POST" enctype="multipart/form-data">
          <h5 class="judul_produk" name="produk_nama" style="color: white;"> 0
            <?php
              include 'db.php';

              $produk = mysqli_query($conn, "SELECT * FROM d_produk WHERE produk_id = '".$_GET['id']."' ");
              $p = mysqli_fetch_object($produk);
            ?>
              <input style="float:left; width:500px" type="text" name="produk_nama" value="#<?php echo $p->produk_nama?>" readonly>
              </h5>
          <div class="container-grid">
            <div class="row">
              

              <div class="col">
                   <div class="form-group row" >
                    <label for="produk_nama" class="col-sm-4 col-form-label">Nama Produk</label>
                    <div class="col-sm-8">
                      <input type="text" name="produk_nama"class="form-control form-control-sm" id="produk_nama" value=" <?php echo $p->produk_nama ?>" readonly>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_lengkap"class="form-control form-control-sm" id="nama_lengkap" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_tlp" class="col-sm-4 col-form-label">Nomor Telepon/HP</label>
                    <div class="col-sm-8">
                      <input type="number" name="no_tlp" class="form-control form-control-sm" id="np_tlp" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" name="email" class="form-control form-control-sm" id="email" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                    <div class="col-sm-8">
                    <textarea class="form-control" name="alamat_pemasangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div> 

                  </div>

                <div class="col"> 

                <div class="form-group row">
                    <label for="alamat_pemasangan" class="col-sm-4 col-form-label">Alamat Pemasangan Jasa</label>
                    <div class="col-sm-8">
                    <textarea class="form-control" name="alamat_pemasangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div> 
               
               <div class="form-group row">
                  <label for="kota" class="col-sm-4 col-form-label">Kota</label>
                  <div class="col-sm-8">
                    <select class="form-control form-control-sm" name="kota">
                      <option>Pilih Kota</option>
                      <option value="Cirebon">Cirebon</option>
                      </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                  <div class="col-sm-8">
                  <select class="form-control form-control-sm" name="kecamatan">
                    <option >Pilih Kecamatan</option>
                    <option value="Kecamatan Harjamukti" >Kecamatan Harjamukti</option>
                    <option value="Kecamatan Kesambi" >Kecamatan Kesambi</option>
                    <option value="Kecamatan Kejaksan" >Kecamatan Kejaksan</option>
                    <option value="Kecamatan Pekalipan" >Kecamatan Pekalipan</option>
                    <option value="Kecamatan Lemahwungkuk" >Kecamatan Lemahwungkuk</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="tbp" class="col-sm-4 col-form-label">Ongkos Kirim</label>
                  <div class="col-sm-8"> 
                  <input type="text" name="tbp" class="form-control form-control-sm" id="tbp" value="Rp 
                  <?php 
                  include 'db.php';

                  $produk = mysqli_query($conn, "SELECT * FROM d_produk WHERE produk_id = '".$_GET['id']."' ");
                  $p = mysqli_fetch_object($produk);

                  $a = 1;

                  if($a != 1 ){
                    echo 'whe';
                  } else {
                    print number_format($p->produk_harga -($p->produk_harga * (95/100)));
                  }
                  
                  ?>
                  " readonly>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="tbk" class="col-sm-4 col-form-label">Total Biaya Keseluruhan</label>
                  <div class="col-sm-8"> 
                  <input type="text" name="tbk" class="form-control form-control-sm" id="tbk"  style="color:#f08519; font-weight:bold; font-size:large"
                  value="Rp <?php 
                        include 'db.php';

                        $produk = mysqli_query($conn, "SELECT * FROM d_produk WHERE produk_id = '".$_GET['id']."' ");
                        $p = mysqli_fetch_object($produk);

                        $a = 2;
                        if ($a != 2){
                          echo 'd';
                        } else {
                          print number_format($p->produk_harga + $p->produk_harga -($p->produk_harga * (95/100)) );
                        }
                        ?>" readonly >
                  </div>
                </div>  
                </div>
                </div>

                  
                <div class="form-group row">
                  <div class="col-sm-12" style="height: 15px;" >
                   <button type="submit" name="submit" class="btn btn-info" style="float: right;">Submit </button>
                  </div>
                </div>
                 
              </form>  
              


            </div>
          </div>
          </form>  
          
                  








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>