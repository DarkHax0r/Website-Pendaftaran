<?php
	session_start();

	include 'koneksi.php';

	if (isset($_POST['login'])) {
		
		// cek akun ada atau tidak
		$cek = mysqli_query($conn, "SELECT * FROM tb_admin 
			WHERE username = '".htmlspecialchars($_POST['user'])."' AND password = '".htmlspecialchars($_POST['pass'])."' "
				);
		if (mysqli_num_rows($cek) > 0) {
			$admin = mysqli_fetch_object($cek);

			$_SESSION['stat_login'] = true;
			$_SESSION['id_Admin'] = $admin->id_admin;
			$_SESSION['nama'] = $admin->nm_admin;
			echo '<script>window.location="data_peserta.php"</script>';
		}else{
			echo '<script>alert("Gagal, username atau password salah")</script>';
		}
	}
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
	<section class="login-utama">

		<div class="box-login">
			<h2>Admin Login</h2>
			<!-- bagian form login -->

			
			<form action="" method="post">
				<div class="box">
					<table>
						<tr>
							<td>Username</td>
							<td><center>:</center></td>
							<td>
								<input type="text" name="user" class="input-control">
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td><center>:</center></td>
							<td>
								<input type="password" name="pass" class="input-control">
							</td>
						</tr>
						<tr>
							<td></td>
							<td><center></center></td>
							<td>
								<input type="submit" name="login" value="Login" class="btn-login">
							</td>
						</tr>
					</table>
				</div>
			</form>


		</div>
	</section>
</body>
</html>