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


	<title> Data Kategori</title>
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
            <li> <a href="produk-data.php">Data Produk</a></li>
            <li> <a href="keluar.php">Logout</a></li>
        </ul>
     </div>
 </Header>

 <!-- Konten -->

 <div class="section">
     <div class="container">
         <h3> Kategori </h3>
         <div class="box">
         <p><a href="kategori-tambah.php">Tambah Kategori</a></p>
             <table border="1" cellspacing="0" class="table">
                 <thead>
                     <tr>
                         <th width="45px">No</th>
                         <th width="800px">Kategori</th>
                         <th colspan="2">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                     include 'db.php';
                        $kategori = mysqli_query($conn, "SELECT * FROM d_kategori ORDER BY kategori_id ASC");
                        while($row = mysqli_fetch_array($kategori)){
                     ?>
                     <tr>
                         <td><?php echo $row['kategori_id']?></td>
                         <td><?php echo $row['kategori_name']?></td>
                         <td><a href="kategori-edit.php?id=<?php echo $row['kategori_id'] ?>"> Edit </a>  ||  <a href="kategori-hapus.php?idk=<?php echo $row['kategori_id'] ?>"> Hapus </a></td>
                
                     </tr>
                        <?php } ?>

                 </tbody>
             </table>
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