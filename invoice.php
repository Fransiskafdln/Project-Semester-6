<?php
include 'db.php';
?>


<style>
@media print{
  .logout {
    display: none;
  }
}
  </style>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> Invoice  </title>
  </head>
  <body>

    <div>
        <div class="container" style="text-align: center;padding-top:30px;font-family: Georgia, serif;">
        <?php
            include 'db.php';
                        $form = mysqli_query($conn, "SELECT * FROM d_form_pemesanan ORDER BY id_pesanan DESC LIMIT 1");
                        if(mysqli_num_rows($form) > 0 ) {
                          while($row = mysqli_fetch_array($form)){
                     ?>
            <h1> Selamat! <?php echo $row['nama_lengkap'] ?> </h1>
            <h4> Form Pesanan telah diterima oleh Admin</h4>

            <table class="table" style="margin-top: 70px; width:75%;margin-left: auto; margin-right: auto;">

                <tbody>
                    <tr>
                    <th scope="row">Kode Pesanan</th>
                    <td> <?php echo $row['id_pesanan'] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Nama Produk</th>
                    <td><?php echo $row['produk_nama'] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Ongkos Kirim</th>
                    <td><?php echo $row['tbp'] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Total Biaya Keseluruhan</th>
                    <td><?php echo $row['tbk'] ?></td>
                    </tr>

                    <?php }} else{ ?>
                        <tr>
                            <td colspan="8" > TIDAK ADA DATA</td>
                        </tr>
                        <?php }?>
                </tbody>
            </table>

            <img src="img/thx.png" alt="" width="600px">
        </div>
    </div>

    <script>
		window.print();
	</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

