

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <title>Registrasi</title>
  </head>
  <body>

	<div>
		<div class="container-regis">
			<div id="img-regis">
			<img src="img/2.png" alt="" class="imgregis">
			</div>
		</div>
	</div>

	<div class="container">
		<div id="con-regis">

		<h1 id="h1-container">
			Apply As a Member
		</h1>
		<form class="row g-3" action="user-regis-aksi.php" method="POST">
			<div class="col-md-6">
				<label for="username" class="form-label"></label>
				<input type="text" name="username" id="first" class="form-control" placeholder="First Name*"required>
			</div>
			<div class="col-md-6">
				<label for="last" class="form-label"></label>
				<input type="text" name="last" id="last" class="form-control"  placeholder="Last Name*"required>
			</div>
			<div class="col-md-6">
				<label for="email" class="form-label"></label>
				<input type="email"name="email" id="email"  class="form-control" placeholder="Your Email*"required>
			</div>
			<div class="col-md-6">
				<label for="phone" class="form-label"></label>
				<input type="phone"name="phone" id="phone"  class="form-control" placeholder="Your Phone*"required>
			</div>
			<div class="col-md-6">
				<label for="password" class="form-label"></label>
				<input type="password"name="password" id="password"  class="form-control" placeholder="Password*"required>
			</div>
			<div class="col-md-6">
				<label for="cpassword" class="form-label"></label>
				<input type="password" name="cpassword" id="cpassword"  class="form-control"placeholder="Confirm Password*"required>
			</div>

			<div class="col-12">
				<button type="submit" class="btn btn-primary" name="register" id="btn-regis" required >Sign in</button>
			</div>
			</form>

			<p style="margin-top: 30px;">Sudah memiliki akun? login <a href="login-user.php" style="color:#f08519;"> disini </a></p> 
			
		</div>
	</div>



	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>

