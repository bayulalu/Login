<?php
require_once 'core/init.php';

if (isset($_POST['btn'])) {

	$email = $_POST['email'];
	$pass  = $_POST['pass'];

	if (!empty(trim($email)) && !empty(trim($pass))) {
			if (login_cek_email($email)) {
				if (cek_data($email,$pass)) {
					$_SESSION['email'] = $email;
					header('Location:isi/home.php');
				}else{
					echo "data yang ada masuan salah";
				}
			}else{
				echo "nama yang di masukan salah";
			}
	}else{
		echo "pastikan email dan password anda tidak kosong";		
	}	
}

?>

	<?php
	require_once 'core/init.php';
	if (isset($_SESSION['email'])) {
		header('Location:isi/home.php');
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
</head>
<link rel="stylesheet" type="text/css" href="view/login.css">
<body>

<div class="bg" >
	
	<h1 id="selamat">SELAMAT DATANG DI CREZCODE</h1><br>
	<div class="kotak">
		<div class="wrap">
		<form action="" method="post">
		<label id="log"><b>Log-In</b></label><br>

		<label>Email :</label>
		<input type="text" name="email" required><br>
		<label>Password &nbsp; :</label>
		<input type="password" name="pass" required><br>
		<input type="submit" value="Login" name="btn">
		</form>
		</div>
	</div>


</div >
<div id="li">
<a href="create.php">Create Akun</a>
	
</div>

</body>
</html>