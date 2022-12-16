<?php 
	include 'koneksi.php';
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
&nbsp;

	<a class="btn btn-info text-light" href="registrasi.php"></a>
	<section class="box-formulir">
		<h2><center>Pendaftaran berhasil</center></h2>
        <div class="box">
            <h4>Kode Pendaftaran Anda adalah P000<?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Pendaftaran</a> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<a href="index.php" onclick="return confirm('Yakin ingin keluar?')" class="btn-cetak">Logout</a>
        </div>

	</section>
</body>
</html>