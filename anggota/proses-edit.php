<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_level = 3;

	$sql = "UPDATE anggota SET nama='$nama', kelas='$kelas', telp='$telp', username='$username', password='$password', id_level=$id_level where id_anggota = $id_anggota";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Data berhasil diganti');window.location='index.php';</script>";
	}

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
