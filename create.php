
<?php
include_once 'core/init.php';

	if (isset($_POST['btn'])) {

		$nama   = $_POST['nama'];
		$email  = $_POST['email'];
		$pass   = $_POST['password'];
		$jk     = $_POST['jk'];
		$alamat = $_POST['alamat'];

		if (!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pass)) && !empty(trim($jk)) && !empty(trim($alamat))  ) {

			if (register_cek_email($email)) {

				if (regisrasi_database($nama, $email,$pass,$jk, $alamat)) {
					echo "data berhasil di simpan";

				}else{
					echo "gagal menyimpipan";
				}
				
			}else{
				echo "email sudah di gunakan";
				// echo "<script>alert('Email sudah di gunakan')";
			}


		}else{
		
			echo "<script>alert('Data Tidak ada yg boleh kosong!')</script>";
		
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
	<title>Create Acction</title>
</head>
<link rel="stylesheet" type="text/css" href="view/login.css"></li>
<body>
<div class="hd">

		<a href="index.php">back to Halaman</a>	

		<div class="btn">
		<a href="login.php">Login</a>
		</div>
</div>
<br><br><br><br><br>
<h1 id="cr">Create Acction</h1>
<div class="bgg">
	<div class="at">
		<form action="create.php" method="post">
			<label class="last">Nama</label>
			<input type="text" name="nama" placeholder="nama" required><br>
			

			<label class="last">Email</label>
			<input type="email" name="email" placeholder="email" required><br>

			<label class="last">password</label>
			<input type="password" name="password" placeholder="password" required><br>

			<label class="last">Jenis Kelamin</label>
			<input type="radio" name="jk" value ="laki-laki" checked>laki-laki
			<input type="radio" name="jk" value ="prempuan">prempuan <br>

			<label class="last">Alamat</label>
			<input type="texarea" name="alamat" placeholder="alamat" required> <br>

			<input type="submit" name="btn" value="Daftar">
		</form>
	</div>
</div>

<footer>
	<p>&copy;Bayu Lalu</p>

</footer>

</body>
</html>