<?php

$DB_SERVER="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_DATABASE="db_skm";

$conn = mysqli_connect($DB_SERVER , $DB_USER, $DB_PASSWORD, $DB_DATABASE);

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$last = strtolower(stripslashes($data["last"]));
	$email = strtolower(stripslashes($data["email"]));
	$phone = strtolower(stripslashes($data["phone"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$cpassword = mysqli_real_escape_string($conn, $data["cpassword"]);

	// cek username sudah ada atau belum 
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah terdaftar!')
			</script>";
		return false;
	}


	//cek konfirmasi password
	 if( $password !== $cpassword) {
	 	echo "<script>
	 		alert('konfirmasi password tidak sesuai!');
	 	</script>";
	 	return false;
	 }

	 //enkripsi password
	 $password = password_hash($password, PASSWORD_DEFAULT);


	 //tambahkan user baru ke database
	 mysqli_query($conn, "INSERT Into user VALUES ('', '$username', '$last', '$email', '$phone', '$password')");

	 return mysqli_affected_rows($conn);
}

?>