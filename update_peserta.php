<?php
include "koneksi.php";
// require_once "function.php";
// $ppdb = new ppdb();
// $update = $ppdb->update();

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$tgl_daftar = $_POST['tgl_daftar'];
	$th_ajaran = $_POST['th_ajaran'];
	$tingkatan_sekolah = $_POST["tingkatan_sekolah"];
	$nm_peserta = $_POST["nm_pendaftar"];
	$tmp_lahir = $_POST["tmpt_lahir"];
	$tgl_lahir = $_POST["tgl_lahir"];
	$jk = $_POST["jenis_kelamin"];
	$agama = $_POST["agama"];
	$alamat = $_POST["alamat"];

	$sql = "UPDATE tb_pendaftaran SET 
									id ='$id', 
									tgl_daftar  = '$tgl_daftar',
									th_ajaran  = '$th_ajaran',
									tingkatan_sekolah ='$tingkatan_sekolah',
									nm_peserta ='$nm_peserta',
									tmp_lahir ='$tmp_lahir',
									tgl_lahir ='$tgl_lahir', 
									jk ='$jk', 
									agama ='$agama', 
									alamat ='$alamat'
									WHERE id = '$id'";
	
	if (mysqli_query($conn, $sql)){
		header("Location:data_peserta.php");
	} else{
		echo "error".$sql."<br>". mysqli_error($conn);
	}
}



?>