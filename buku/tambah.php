<?php  

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM kategori");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
	<div class="card-header">
	<a class="btn btn-danger" href="http://localhost/siperpus/buku"><i class="fas fa-arrow-alt-circle-left"></i> </a>
	<center>	
	<h2 class="card-title"><i class="fad fa-books-medical"></i> Tambah Data Buku</h2>	
	<form method="post" action="proses-tambah.php">
		<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" name="penerbit"></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input type="text" name="pengarang"></td>
		</tr>
		<tr>
			<td>Ringkasan</td>
			<td>
				<textarea name="ringkasan" style="width: 180px">	

				</textarea>
			</td>
		</tr>
		<tr>
			<td>Cover</td>
			<td><input type="file" name="cover"></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="number" name="stok"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select style="width: 200px" name="id_kategori">
					<option value="">-- Pilih Kategori --</option>

					<?php  
					 while ($kategori = mysqli_fetch_assoc($query)):			
					 ?>

					<option value="<?php echo $kategori['id_kategori']; ?>"> <?php echo $kategori['kategori']; ?></option>

					<?php 
					 endwhile;
					?>
	
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
		</tr>
		</table>
	</form>
	</div>
</center>
</body>
</html>

<?php  
include '../aset/footer.php';
?>