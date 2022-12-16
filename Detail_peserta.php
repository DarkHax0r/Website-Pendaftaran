<?php
include 'koneksi.php';
session_start();
if ($_SESSION['stat_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}


$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
		WHERE id = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($peserta);
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
	<header>
		<h1><a href="beranda.php">Admin SPD Bimbel</h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data_peserta.php">Data Peserta</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>

	<!--bagian konten-->
	<section class="content">
		<h2>Detail Peserta</h2>
		<div class="box">
			<table class="table-data" border="0">
				<tr>
					<td>Kode Pendaftaran</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo 'P000', $p->id ?></td>
				</tr>
				<tr>
					<td>Tahun Ajaran</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo $p->th_ajaran ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo $p->nm_peserta ?></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo $p->jk ?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo $p->agama ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<center>:</center>
					</td>
					<td><?php echo $p->alamat ?></td>
				</tr>
			</table>
		</div>
	</section>


</body>

</html>