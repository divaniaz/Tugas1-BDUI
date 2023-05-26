<?php 
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Kursus Stir Antartika </title>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		
<div class="container">
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="home.php">DAFTAR PELANGGAN KURSUS STIR MOBIL ANTARTIKA</a>
  </nav>
  </nav>
</div>

	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head> 
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12"> 
	<a class="btn btn-primary" href="tambah_data.php" role="button">Tambah</a>
	<a class="btn btn-danger" href="../logout.php" role="button">Logout</a>
	<br> 
	<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Tgl Masuk</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php

		$no=1;
		$query="select * from tb_pelanggan";

		$query_r = mysqli_query($connect, $query);

		if (!$query_r){
			printf("eror: %s\n", mysqli_error($connect));
			exit();}
		while ($result = mysqli_fetch_array($query_r)) 
		{

		?>

		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $result ['nik'];?></td>
			<td><?php echo $result ['nama_pelanggan'];?></td>
			<td><?php echo $result ['alamat'];?></td>
			<td><?php echo $result ['tgl_masuk'];?></td>
			<td><?php echo $result ['status'];?></td>

			<td>	
			<a class="btn btn-success" href="update_data.php?id=<?php echo $result['no'];?>">Update</a>
			<a class="btn btn-danger" href="delete.php?id=<?php echo $result['no'];?>">Delete</a>
			</td>
		</tr>

		<?php
		$no++;
	}
	?>

	</tbody>
	</table>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="../bootstrap/js/bootstrap.min.js"></script>
</div>

</body>

</html>