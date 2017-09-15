
	<?php
	require_once 'core/init.php';
	if (isset($_SESSION['email'])) {
		header('Location:isi/home.php');
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Mulai</title>
</head>

<style type="text/css">
	.button{
		text-decoration: none;
		color: white;
		width: 200px;
		text-align: center;
		font-size: 20px;
		border-radius: 10px;
		padding: 15px 70px;
		margin: 10px; 


		-moz-border-radius: 10px;

	}
	.mulai{
		background-color: rgba(255, 0, 0, 0.6980392156862745);
		box-shadow: 0 4px 8px 0 rgb(117, 117, 124);
	}
	.mulai:hover{
	background-color: rgba(148, 0, 0, 0.6980392156862745);
	}
	.pos{
		margin:23% 40%;
		font-family: sans-serif;

		/* kotak */

		}
	a{
		color: black;
		text-decoration: none;
	}
	
	.in-kotak{

		/* background-color: rgb(161, 161, 179); */
		padding: 10px;
		position: fixed;
		left: 30%;
		/* width: 300px; */
		/* height: 100px; */
		margin-left: 30px;
		transform: translateY(-4000%);
		transition: transform 1s ease;
	}
	.kotak:before{
		content: "";
		background-color: rgba(0,0,0,0.5);
		position: fixed;
		top: 0;
		left: 0;
		height: 100%;
		width: 100%;
		display: none;
	}
	.kotak:target .in-kotak{
	
		transform: translateY(0%);	
	}
	.kotak:target:before{
		display: block;
	}

	#tutup{
		margin-left: 192px; 
		color: white;
	}
	body{
		background-image: url('view/1.jpg');
	}

</style>
<body>


<div class="kotak" id="loginn">
	<div class="in-kotak">
		<a href="login.php" class="button mulai">Login</a>
		<a href="create.php" class="button mulai">Daftar</a><br><br><br>
		<a href="#close" id="tutup">Tutup</a>

	</div>
</div>

<div class="pos">
<a href="#loginn" class="button mulai">Mulai</a>
</div>

</body>
</html>