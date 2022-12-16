<?php 
	//include 'koneksi.php';

	require_once 'function.php';
	$ppdb = new ppdb();
	$insert = $ppdb->input();
		// if ($insert) {
		// 	echo '<script>window.location="berhasil.php?id='.$generateId.'"</script';
		// }else{
		// 	echo 'huft'. mysqli_error($conn);
		// }
	// }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<section class="box-formulir">
		<h2><center>Formulir Pendaftaran Siswa Baru Bimbel</center></h2>

		<form action="" method="post">
			<div class="box">
				<table border=0 class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="Tahun_Ajaran" class="input-control"
							value="2022/2023" readonly>
						</td>
					</tr>
					<tr>
						<td>Tingkatan Sekolah</td>
						<td><center>:</center></td>
						<td>
							<select class="input-control" name="tingkatan_sekolah">
								<option value="">--Pilih--</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMK/SMA">SMK/SMA</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mata Pelajaran</td>
						<td><center>:</center></td>
						<td>
							<select class="input-control" name="mapel">
								<option value="">--Pilih--</option>
								<option value="B. Inggris">Bahasa Inggris</option>
								<option value="Matematika">Matematika</option>
							</select>
						</td>
					</tr>
				</table>
			</div>

			<h3>Data Diri Calon Siswa</h3>
			<div class="box">
				<table border=0 class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="nm_peserta" class="input-control" required>
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="tmpt_lahir" class="input-control" required>
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><center>:</center></td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control" required>
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><center>:</center></td>
						<td>
							<input type="radio" name="jenis_kelamin" class="input-control" value="Laki-laki">Laki-Laki
							<input type="radio" name="jenis_kelamin" class="input-control" value="Perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><center>:</center></td>
						<td>
							<select class="input-control" name="agama">
								<option>--Pilih--</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindhu">Hindhu</option>
								<option value="Buddha">Buddha</option>
								<option value="Konghucu">Konghucu</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><center>:</center></td>
						<td>
							<textarea class="input-control" name="alamat" required></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Daftar" class="btn-daftar">
						</td>
					</tr>

				</table>
			</div>

		</form>
	</section>
</body>
</html>