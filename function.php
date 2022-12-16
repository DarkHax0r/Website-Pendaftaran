<?php

class ppdb {
	var $host = 'localhost';
	var $user = 'root';
	var $pass = '';
	var $db = 'dina';
	var $conn = "";

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
	}

	function tampil() 
	{
		$view = "SELECT * FROM tb_pendaftaran";
		$hasil = $this->conn->query($view);
		while ($v = mysqli_fetch_array($hasil)) {
			$result[] = $v;
		}
		return $result;
	}

	function input()   
	{
		$dateNow = date('Y-m-d');

		if(isset($_POST["submit"])) {
			$tahun_ajaran = $_POST['Tahun_Ajaran'];
			$tingkatan_sekolah = $_POST['tingkatan_sekolah'];
			$mapel = $_POST['mapel'];
			$nm_peserta = $_POST['nm_peserta'];
			$tmp_lahir = $_POST['tmpt_lahir'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$agama = $_POST['agama'];
			$alamat = $_POST['alamat'];

			$sql = "INSERT INTO tb_pendaftaran (tgl_daftar, th_ajaran, tingkatan_sekolah, mapel, nm_peserta, tmp_lahir,tgl_lahir, jk, agama, alamat) VALUES ('$dateNow','$tahun_ajaran','$tingkatan_sekolah','$mapel','$nm_peserta','$tmp_lahir','$tgl_lahir','$jenis_kelamin','$agama','$alamat')";
			
			$simpan = mysqli_query($this->conn, $sql);

			if($simpan){
				$query = "SELECT * FROM tb_pendaftaran ORDER BY ID DESC LIMIT 1";
				$result = $this->conn->query($query);

				$row = $result->fetch_assoc();

				$id = $row["id"]; //get hanya id
				
				echo '<script>window.location="berhasil.php?id='.$id.'"</script>';
			}else{
				echo 'huft'. mysqli_error($this->conn);
			}
		};

		$this->conn->close();
	}

	function delete()
	{
		mysqli_query($this->conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '$id_Pendaftaran' ");
	}
	
	function edit()
	{
		$view = mysqli_query($this->conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '	$id_Pendaftaran' ");
		while ($v = mysqli_fetch_array($this->$view)) {
			$hasil[]= $v;
		}
		return $hasil;
	}

	function update($id_pendaftaran, $tgl_daftar, $th_ajaran, $tingkatan_sekolah, $nm_peserta, $tmp_lahir, $tgl_lahir, $jk, $agama, $alamat)
	{
		mysqli_query($this->conn, "UPDATE tb_pendaftaran SET id_pendaftaran ='$id_pendaftaran', tgl_daftar  = '$tgl_daftar',
		th_ajaran  = '$th_ajaran', tingkatan_sekolah ='$tingkatan_sekolah', nm_peserta ='$nm_peserta', tmp_lahir ='$tmp_lahir',
		tgl_lahir ='$tgl_lahir', jk ='$jk', agama ='$agama', alamat ='$alamat'");
	}

	function simpan(){
		if (isset($_POST['tambah_pendaftar'])) {
			$tgl_daftar = $_POST['tgl_daftar'];
			$th_ajaran = $_POST['th_ajaran'];
			$tingkatan_sekolah = $_POST['tingkatan_sekolah'];
			$nm_peserta = $_POST['nm_peserta'];
			$tmp_lahir = $_POST['tmp_lahir'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$jk = $_POST['jk'];
			$agama = $_POST['agama'];
			$alamat	= $_POST['alamat'];

			$sql = "INSERT INTO tb_pendaftaran (tgl_daftar, th_ajaran, tingkatan_sekolah, nm_peserta, tmp_lahir,
			tgl_akhir, jk, agama, alamat)
				VALUES ('$tgl_daftar', '$th_ajaran', '$tingkatan_sekolah', '$nm_peserta', '$tmp_lahir', '$tgl_lahir',
				'$jk', '$agama', '$alamat') ";
			$simpan = mysqli_query($this->conn, $sql);

			if ($simpan) {
				echo "<script>
				alert('INPUT DATA SUKSES!)";
			} else {
				echo "<script>
				alert('INPUT DATA GAGAL!');
				document.location='data_peserta.php';
				</script>";
			}
		}
	}

	function registrasi($login)
	{
		$usernme = strtolower(strips);
	}

	
}

// $ppdb = new ppdb();
// $ppdb->input();

?>