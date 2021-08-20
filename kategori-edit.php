<?php
    include 'db.php';  
      $kategori = mysqli_query($conn, "SELECT * FROM d_kategori WHERE kategori_id = '" .$_GET['id']."'");
      if(mysqli_num_rows($kategori) == 0 ){
          echo '<script> window.location="kategori-data.php"</script>';
      }
      $k = mysqli_fetch_object($kategori);
           
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">


	<title> Tambah Kategori</title>
</head>

<body>
 <!-- Header -->
 <Header>
     <div class="container">
     <h1>
         <a href="">Admin SKM Adv</a>
        </h1>
        <ul>
            <li> <a href="dashboard.php">Dashboard</a></li>
            <li> <a href="pesanan.php">Pesanan</a></li>
            <li> <a href="kategori-data.php">Data Kategori</a></li>
            <li> <a href="dataproduk.php">Data Produk</a></li>
            <li> <a href="keluar.php">Logout</a></li>
        </ul>
     </div>
 </Header>

 <!-- Konten -->

 <div class="section">
     <div class="container">
         <h3> Edit Kategori </h3>
         <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder ="Nama Kategori" class="input-control" value="<?php echo $k->kategori_name ?>" required>
                <input type="submit" name="submit" value="Edit" class="btn"> 
            </form>
            <?php

                if(isset($_POST['submit'])) {

                    $nama = ucwords($_POST['nama']);
                    $update = mysqli_query($conn, "UPDATE d_kategori SET 
                                kategori_name = '".$nama."' WHERE kategori_id = '".$k->kategori_id."' ");
                    if($update){
                        echo '<script> alert("Edit data berhasil")</script>';
                        echo '<script> window.location="kategori-data.php"</script>';
                    } else{
                        echo 'gagal' .mysqli_error($conn);
                    }
                }
            ?>
           
         </div>
     </div>
 </div>


 <!-- Footer -->
 <footer>
    <div class="container">
        <small> Copyright &copy 2021 Saka Karya Maju Advertising </small>
    </div>
 </footer>
</body>
</html>