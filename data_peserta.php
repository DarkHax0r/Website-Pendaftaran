<?php
include 'koneksi.php';
session_start();
if ($_SESSION['stat_login'] != true) {
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
	<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
	<!-- Bagian Heade -->
	<header>
		<h1><a href="beranda.php">Admin SPD Bimbel</h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data_peserta.php">Data Pendaftar</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>

	<!--bagian konten-->
	<section class="content">
		<h2>Data Pendaftar SPD Bimbel</h2>
		<div class="box">
			<a href="print_pendaftar.php" target="_blank" class="btn-cetak">Print</a>
			<form method="GET" action="" style="text-align:center;">
			</form>
			<table class="table" border="1" align="center" id="myTable">
				<thead>
					<tr bgcolor="gree">
						<th>No</th>
						<th>ID Pendaftaran</th>
						<th>Tahun Ajaran</th>
						<th>Tingkatan Sekolah</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;

					if (isset($_GET['cari'])) {
						$query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE nm_peserta LIKE '%" . $_GET['cari_nama'] . "%' ORDER BY nm_peserta");
					} else {
						$query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
					}
					while ($data = mysqli_fetch_array($query)) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo 'P000', $data['id']; ?></td>
							<td><?php echo $data['th_ajaran']; ?></td>
							<td><?php echo $data['tingkatan_sekolah']; ?></td>
							<td><?php echo $data['nm_peserta']; ?></td>
							<td>
								<a href="Detail_peserta.php?id=<?php echo $data['id'] ?>">Detail</a> ||
								<a href="hapus_peserta.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a> ||
								<a href="edit_peserta.php?id=<?php echo $data['id'] ?>">Edit</a>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>