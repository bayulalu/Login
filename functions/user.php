<?php
//verifikasi email 
function register_cek_email($email){
	global $link;


	$email =mysqli_real_escape_string($link,$email);

	$query = "SELECT * FROM user WHERE email='$email' ";

	if ($result = mysqli_query($link,$query)) {
		if (mysqli_num_rows($result) == 0) return true;
			else return false;
		
	}
}

function regisrasi_database($nama, $email,$pass,$jk,$alamat){
	global $link;

	$nama  	= mysqli_real_escape_string($link, $nama);
	$email 	= mysqli_real_escape_string($link, $email);
	$pass  	= mysqli_real_escape_string($link, $pass);
	$jk    	= mysqli_real_escape_string($link,$jk);
	$alamat = mysqli_real_escape_string($link,$alamat);

	$pass = password_hash($pass,PASSWORD_DEFAULT);
	$query = "INSERT INTO user (nama,email,pass,jk,alamat) VALUES ('$nama','$email','$pass','$jk','$alamat')";

	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}


//utuk froum Login nihh

	function login_cek_email($email){
		global $link;
		$email = mysqli_real_escape_string($link, $email);

		$query = "SELECT * FROM user WHERE email='$email' ";

	if ($result = mysqli_query($link,$query)) {
		if (mysqli_num_rows($result) != 0) return true;
			else return false;



}
	}



	function cek_data($email,$pass){
		global $link;
		$email = mysqli_real_escape_string($link, $email);
		$pass =  mysqli_real_escape_string($link, $pass);

		$query = "SELECT pass FROM user WHERE email='$email' ";
		$result = mysqli_query($link,$query);
		$hast = mysqli_fetch_assoc($result)['pass']; 

		if (password_verify($pass , $hast)) {
			return true;
		}else{
			return false;
		}


	}

	
	

?>