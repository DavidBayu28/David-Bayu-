<?php

include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";

$res=mysqli_query($koneksi, $sql);

$pinjam=array();

while ($data=mysqli_fetch_assoc($res)) {
	$pinjam[]=$data;
}

include '../aset/header.php';
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h5 class="card-title"><i class="fas fa-edit"></i>Data Anggota</h5>
  </div>
  <div class="card-body">
  <center><a href="tambah.php">Tambah_Data</a></center>
  	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col" width="50">#</th>
      <th scope="col" width="100">Nama</th>
      <th scope="col" width="100">Kelas</th>
      <th scope="col" width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    	$no = 1;
    	foreach($pinjam as $p) { ?>

    		<tr>
    			<th scope="row"><?= $no ?></th>
    			<td><?= $p['nama'] ?></td>
    			<td><?= $p['kelas'] ?></td>
    			<td>
				<a href="detail.php?id_anggota=<?php echo $p['id_anggota'] ?>"; class="badge badge-success">Detail</a>
				<a href="edit.php?id_anggota=<?php echo $p['id_anggota'] ?>"; class="badge badge-danger">Edit</a>
				<a href="hapus.php?id_anggota=<?php echo $p['id_anggota'] ?>"; class="badge badge-warning">Hapus</a>
    			</td>
    		</tr>
    <?php 
	$no++;
}
    ?>
    </tbody>
</table>
  </div>
</div>

<?php
include '../aset/footer.php';
?>