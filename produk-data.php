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
            <li> <a href="produk-data">Data Produk</a></li>
            <li> <a href="keluar.php">Logout</a></li>
        </ul>
     </div>
 </Header>

 <!-- Konten -->

 <div class="section">
     <div class="container">
         <h3> Data Produk </h3>
         <div class="box">
         <p><a href="produk-tambah.php"> TAMBAH PRODUK</a></p>
             <table border="1" cellspacing="0" class="table">
                 <thead>
                     <tr>
                         <th width="45px">Kode</th>
                         <th>Kategori</th>
                         <th>Nama Produk</th>
                         <th>Harga</th>
                         <th width="300px">Deskripsi</th>
                         <th>Gambar</th>
                         <th>Status</th>
                         <th width ="150px">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                     include 'db.php';
                        $no = 1;
                        $produk = mysqli_query($conn, "SELECT * FROM d_produk LEFT JOIN d_kategori USING (kategori_id) ORDER BY produk_id DESC");
                        if(mysqli_num_rows($produk) > 0 ) {
                            while($row = mysqli_fetch_array($produk)){
                        
                     ?>
                     <tr>
                         <td> <?php echo $no++  ?></td>
                         <td><?php echo $row['kategori_name']  ?></td>
                         <td><?php echo $row['produk_nama']  ?></td>
                         <td> Rp<?php echo number_format($row['produk_harga'])  ?></td>
                         <td><?php echo $row['produk_deskripsi']  ?></td>
                         <td><img src="produk/<?php echo $row['produk_img'] ?>" width="60px"></td>
                         <td><?php echo $row['produk_status'] == 0?'Tidak Aktif' :'Aktif' ?></td>
                         
                         <td><a href="produk-edit.php?id=<?php echo $row['produk_id'] ?>" width="50px"> Edit </a>  ||  <a href="produk-hapus.php?idp=<?php echo $row['produk_id'] ?>"> Hapus </a></td>
                
                     </tr>
                     <?php }} else{ ?>
                        <tr>
                            <td colspan="8" > TIDAK ADA DATA</td>
                        </tr>
                        <?php }?>
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