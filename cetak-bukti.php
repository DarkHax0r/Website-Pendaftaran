<?php
    include 'koneksi.php';
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id = '".$_GET['id']."'");
    $p = mysqli_fetch_object($peserta);

?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>

	<section class="box-formulir">
		<h2>Pendaftaran berhasil</h2>
        <table class="table-data" border="0">
            <tr>
                <td>Kode Pendaftaran</td>
                <td><center>:</center></td>
                <td><?php echo 'P000',$p->id ?></td>
            </tr>
            <tr>
                <td>Mata Pelajaran yang dipilih</td>
                <td><center>:</center></td>
                <td><?php echo $p->mapel ?></td>
            </tr>
            <tr>
                <td>Tahun Ajaran</td>
                <td><center>:</center></td>
                <td><?php echo $p->th_ajaran ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><center>:</center></td>
                <td><?php echo $p->nm_peserta ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td><center>:</center></td>
                <td><?php echo $p->tmp_lahir.', '. $p->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamain</td>
                <td><center>:</center></td>
                <td><?php echo $p->jk ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><center>:</center></td>
                <td><?php echo $p->agama ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><center>:</center></td>
                <td><?php echo $p->alamat?></td>
            </tr>
        </table>
		
	</section>
</body>
</html>