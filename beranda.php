<?php 
	include 'koneksi.php';
	session_start();
	if ($_SESSION['stat_login'] !=true) {
		echo '<script>window.location="login.php"</script>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Bagian Heade -->
	<header >
		<h1><a href="beranda.php">Admin SPD Bimbel</h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data_peserta.php">Data Peserta</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>

	<!--bagian konten-->
	<section class="content">
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di Dashboard Admin SPD Bimbel</h3>
		</div>
	</section>


</body>
</html>