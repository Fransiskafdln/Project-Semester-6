<style>
  
/* LOGIN STYLE dari farrell */

body{
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100vh;
    background: url("img/AU.png");
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}
.loginContainer{
    width: 400px;
    height: 320px;
    background-color: rgba(255, 255, 255, 0.3);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    border-radius: 20px;
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    border: 2px solid #8F8F8F;
}
.userPic{
    width: 110px;
    height: 110px;
    border-radius: 70px;
    background-color: white;
    border: 2px solid rgb(231, 231, 231);
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.userIcon{
    font-size: 65px !important;
    color: rgb(192, 192, 192);
}
.userName{
    font-family: sans-serif;
    font-weight: 500;
    font-size: 18px;
    color: rgb(22, 41, 41);
    text-align: center;
    margin-top: 15px;
}
.formCon{
    text-align: center;
    width: 100%;
    margin-top: 15px;
}
.passCon{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 5px;
}
.form{
    width: 250px;
    line-height:35px;
    font-size: 17px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-right: 5px;
    outline-style: none;
    border: none;
    border-radius: 50px 0px 0px 50px;
    background-color: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
}
.form::placeholder{
    color: slategrey ;
}
.go{
    width: 44px;
    height: 44.3px;
    margin-left: 3px;
    border-radius: 0px 30px 30px 0px;
    background-color: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    outline: none;
    cursor: pointer;
}
.loginBtn{
    font-size: 18px !important;
    margin-right: 2px;
    color: slategrey;
}
.forgotPass{
    font-family: sans-serif;
    text-decoration: none;
    color: #DADADA;
    font-size: 14px;
}
.input-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
	  border: 1px solid #e0e0d1;
	  border-radius: 20px;
}
.forgotPass:hover{
  color: #051E3A;
}
.btn {
    padding: 8px 15px;
    background-color: black;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 10px;
}
.box-login {
    width: 300px;
    min-height: 200px;
    padding: 15px;
    box-sizing: border-box;
    justify-content: center;
    margin: auto;
}
</style>

<div class="loginContainer">
<h2 style=" text-align:center">Login</h2>
<div class="box-login">
			<form action="" method="POST">
        <table style="margin: auto;  ">
          <tr>
          <td><input type="text" name="user" placeholder="Username" class="input-control"
          style="margin: auto;"
          ></td>
          </tr>

          <tr>
          <td><input type="password" name="pass" placeholder="Password" class="input-control"></td>
          </tr>

          <tr>
          <td style="margin:auto">
          <input type="submit" name="submit" value="Login" class="btn">	
          </td>
          </tr>
        </table>
			</form>
      <?php
      session_start();
    if(isset($_POST['submit'])) {
      include 'db.php';

      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '" .$user. "' AND password = '" .MD5($pass)."'");

      if (mysqli_num_rows($cek) > 0 ) {

        $d = mysqli_fetch_object($cek);
        $_SESSION ['status_login'] = true;
        $_SESSION['a_global'] = $d;
        $_SESSION['id'] = $d->id;
      	echo '<script>window.location="vu-home.php"</script>';
    } else {
    	echo '<script> alert ("username atau password anda salah!") </script>';
    }
}
  ?>
</div>
</div>