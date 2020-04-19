<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = mysqli_query($koneksi, "SELECT * FROM anggota INNER JOIN level on anggota.id_level = level.id_level where id_anggota = $id_anggota");
$anggota = mysqli_fetch_assoc($sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Edit Anggota</h2>
			<hr class="bg-light">
			<form action="proses-edit.php" method="post">
			<table><tr><th>
			<table class="table table-bordered">
			<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'];?>">
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?= $anggota['nama'];?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?= $anggota['kelas'];?>"></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td><input type="number" name="telp" value="<?= $anggota['telp'];?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?= $anggota['username'];?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?= $anggota['password'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
			</tr>
		</table>
		</th></tr></table>
		</form>
</body>
</html>

<?php 
include '../aset/footer.php'
?>