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


	<title> dashboard</title>
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
         <h3> Dashboard </h3>
         <h5>Selamat Datang di Dashboard Admin</h5>
         <div class="box">
             <h2 style="color: #f08519;"> Form Pesanan Masuk  </h2>

             <table border="1" cellspacing="0" class="table" style="margin-top: 20px;">
                 <thead>
                     <tr>
                         <th>Kode</th>
                         <th>Nama Produk</th>
                         <th>Nama Lengkap</th>
                         <th>No Tlp/Hp</th>
                         <th>Email</th>
                         <th>Alamat Pemasangan Jasa</th>
                         <th>Kota</th>
                         <th>Kecamatan</th>
                         <th>Ongkos Kirim</th>
                         <th>Biaya Keseluruhan</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                     include 'db.php';
                        $no = 1;
                        $form = mysqli_query($conn, "SELECT * FROM d_form_pemesanan ORDER BY id_pesanan DESC");
                        if(mysqli_num_rows($form) > 0 ) {
                            while($row = mysqli_fetch_array($form)){
                        
                     ?>
                     <tr>
                         <td>    <?php echo $no++  ?></td>
                         <td>    <?php echo $row['produk_nama']  ?></td>
                         <td>    <?php echo $row['nama_lengkap']  ?></td>
                         <td>    <?php echo $row['no_tlp'] ?></td>
                         <td>    <?php echo $row['email']  ?></td>
                         <td>    <?php echo $row['alamat_pemasangan']  ?></td>
                         <td>    <?php echo $row['kota']  ?></td>
                         <td>    <?php echo $row['kecamatan']  ?></td>
                         <td>  Rp  <?php echo $row['tbp']  ?></td>
                         <td>  Rp  <?php echo $row['tbk']  ?></td>

                         
                         <td><a 
                         style="color:blue; text-align:center"
                          href="validasi-form.php?id=<?php echo $row['id_pesanan'] ?>" width="50px"> Validasi Pesanan </a>  </td>
                
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