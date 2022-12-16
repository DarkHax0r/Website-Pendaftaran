   <?php
include "koneksi.php";

// require_once "function.php";
// $ppdb = new ppdb();
// $update = $ppdb->update();

$id = $_GET["id"];

$sql = "SELECT * FROM tb_pendaftaran  WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

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
		<h2><center>Formulir Edit Pendaftaran Siswa Baru Bimbel</center></h2>

		<form action="update_peserta.php" method="post">
			<div class="box">
				<table border=0 class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="th_ajaran" class="input-control"
							value="<?= $row['th_ajaran'] ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>Tanggal Daftar</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="tgl_daftar" class="input-control"
							value="<?= $row['tgl_daftar'] ?>" readonly>
						</td>
					</tr>

                    <tr>
						<td>ID Pendafataran</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="id" class="input-control" value="<?= $row['id'] ?>" readonly>
						</td>
					</tr>

					<tr>
						<td>Tingkatan Sekolah</td>
						<td><center>:</center></td>
						<td>
							<select class="input-control" name="tingkatan_sekolah">
								<option value="<?= $row['tingkatan_sekolah'] ?>"><?= $row['tingkatan_sekolah'] ?></option>
								<option value="TK">TK</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMK/SMA">SMK/SMA</option>
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
							<input type="text" name="nm_pendaftar" class="input-control" value="<?= $row['nm_peserta'] ?>">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><center>:</center></td>
						<td>
							<input type="text" name="tmpt_lahir" class="input-control" value="<?= $row['tmp_lahir'] ?>">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><center>:</center></td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control" value="<?= $row['tgl_lahir'] ?>">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><center>:</center></td>
						<td>
							<input type="radio" name="jenis_kelamin" class="input-control" value="Laki-laki" <?= ($row['jk'] == 'Laki-Laki')? 'checked' : '' ?>>Laki-Laki
							<input type="radio" name="jenis_kelamin" class="input-control" value="Perempuan" <?= ($row['jk'] != 'Laki-Laki')? 'checked' : '' ?>>Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><center>:</center></td>
						<td>
							<select class="input-control" name="agama">
								<option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
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
							<textarea class="input-control" name="alamat"><?= $row['alamat'] ?></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Simpan Perubahan" class="btn-daftar">
						</td>
					</tr>

				</table>
			</div>

		</form>
	</section>
</body>
</html>