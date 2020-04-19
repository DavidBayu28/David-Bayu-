<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota inner join level on anggota.id_level = level.id_level where id_anggota = $id_anggota";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);


?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Kelas</strong></td>
						<td width="500px"><?= $detail['kelas'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Telp</strong></td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<a href="edit.php?id_anggota=<?= $detail['id_anggota']?>" class="badge badge-warning" style="width:80px">Edit</a>&nbsp&nbsp
						<a href="hapus.php?id_anggota=<?= $detail['id_anggota']?>" class="badge badge-danger" style="width:80px">Hapus</a></td>
					</tr>
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>
