<?php
//Include file koneksi ke database
include "db.php";

//menerima nilai dari kiriman form pendaftaran
$username		=$_POST["username"];
$last			=$_POST["last"];
$email			=$_POST["email"];
$phone			=$_POST["phone"];
$password		=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into user (username,last,email,phone,password) values
		('$username','$last','$email','$phone','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo '<script language="javascript">
	alert ("Registrasi Berhasil Di Lakukan!");
	window.location="login-user.php";
	</script>';
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>