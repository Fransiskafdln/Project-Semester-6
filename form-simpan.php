<?php


// koneksi database
include 'db.php';
 
// menangkap data yang di kirim dari form
$produk_nama           = $_POST['produk_nama'];
$nama_lengkap          = $_POST['nama_lengkap'];
$no_tlp                = $_POST['no_tlp'];
$email                 = $_POST['email'];
$alamat_pemasangan     = $_POST['alamat_pemasangan'];
$kota                  = $_POST['kota'];
$kecamatan             = $_POST['kecamatan'];
$tbp                   = $_POST['tbp'];
$tbk                   = $_POST['tbk'];
 
// menginput data ke database
$insert = mysqli_query($conn, "INSERT INTO d_form_pemesanan VALUES (
    null,
    '".$produk_nama."',
    '".$nama_lengkap."',
    '".$no_tlp."',
    '".$email."',
    '".$alamat_pemasangan."',
    '".$kota."',
    '".$kecamatan."',
    '".$tbp."',
    '".$tbk."' ) ");
 
// mengalihkan halaman kembali ke index.php
if ($insert){
        echo '<script>alert("Tambah Data Berhasil")</script>';
                            echo'<script> window.location="invoice.php"</script>';
                        } else {
                            echo 'gagal' .mysqli_error($conn);
                        }
 
?>