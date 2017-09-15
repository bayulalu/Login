<?php
session_start();

if (isset($_SESSION['email'])) {
	echo "ini adalah halaman profil ".$_SESSION['email'];
}else{
	echo "login dulu mas";
}

?>

<a href="logout.php">Logout</a>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<div class="judul">
	<h1>Selamat Datang DI WEB CRESHCORE </h1>
	
</div>
<div class="nav">
	<div class="kiri">
		<a href="#">HOME</a>&nbsp;&nbsp;
		<a href="#">TUTORIAL</a>&nbsp;&nbsp;
		<a href="#">ABOUT</a>&nbsp;&nbsp;
	</div>



	<div class="kanan">
		<a href="#">PROFIL</a>&nbsp;&nbsp;
		<a href="#">LOUGUT</a>

	</div>

	</div>

