<?php

session_start();

$nama = 'bayu';
$pass = '123';



if (isset($_SESSION['nama_user'])) {
	header('Location:isi/home.php');
	// echo "string";
	
}else{

	if (isset($_POST['submit'])) {
		if ($_POST['nama'] == $nama && $_POST['password']== $pass) {
		
			setcookie('nama_user', $_POST['nama'], time()+120 );

			header('Location:isi/home.php');

			$_SESSION['nama_user'] = $_POST['nama'];

			


		}else{
		
			// echo "<script>alert('haloo semuanya!')</script>";
			header('Location:login.php');
			// echo "<script>alert('Passeord yang anda masukan salah!')</script>";
		}

 	}
}
?>