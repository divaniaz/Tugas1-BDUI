<head>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">TAMBAH DATA PELANGGAN</h3>

	<a class="btn btn-warning" href="home.php" role="button">Kembali</a>
	

	<form action="proses-tambah.php" method="post">
		<div class="form-group">
		<label for="nik">NIK</label>
			<input type="text" class="form-control" name="nik" id="nik">
		</div>

		<div class="form-group">
		<label for="nama_pelanggan">Nama Pelanggan</label>
			<input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan">
		</div>

		<div class="form-group">
		<label for="alamat">Alamat</label>
			<input type="text" class="form-control" name="alamat" id="alamat">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
		</div>

		<div class="form-group">
		<label for="status">Status</label>
			<input type="text" class="form-control" name="status" id="status">
		</div>

		<button type="submit" class="btn btn-success">Submit</button>
	</form>

</div>
</div>
</body>

