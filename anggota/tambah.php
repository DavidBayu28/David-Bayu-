<?php 
include '../aset/header.php';
?>
<html>
<head>
	<title>Tambah Data Anggota</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Tambah Anggota</h2>
			<hr class="bg-light">
			<form action="proses-tambah.php" method="post">
			<table><tr><th>
			<table class="table table-bordered">
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td><input type="number" name="telp"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
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