<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDIT DATA PELANGGAN</title>



	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">Edit Data Pelanggan</h3>
	<a class="btn btn-warning" href="home.php" role="button">Kembali</a>

<?php



$id_db_pelanggan = $_GET['id'];

	$query_nilai ="select * from tb_pelanggan where no='$id_db_pelanggan'";
	$query_nilai_ok = mysqli_query($connect, $query_nilai);
	if (!$query_nilai_ok){
		printf("eror: %s\n",mysqli_error($connect));
		exit();
	}

	while ($query_result = mysqli_fetch_array($query_nilai_ok))
	
	{ 

	$nik_ok = $query_result['nik'];
	$nama_pelanggan_ok = $query_result['nama_pelanggan'];
	$alamat_ok = $query_result['alamat'];
	$tgl_masuk_ok = $query_result['tgl_masuk'];
	$status_ok = $query_result['status'];


?>

	<form method="POST" action="">
		<div class="form-group">
		<label for="nik">NIK</label>
			<input type="text" class="form-control" name="nik" id="nik_ok" value="<?php echo $nik_ok;?>">
		</div>

		<div class="form-group">
		<label for="nama_pelanggan">Nama Pelanggan</label>
			<input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan_ok" value="<?php echo $nama_pelanggan_ok;?>">
		</div>

		<div class="form-group">
		<label for="alamat">Alamat</label>
			<input type="text" class="form-control" name="alamat" id="alamat_ok" value="<?php echo $alamat_ok;?>">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk_ok" value="<?php echo $tgl_masuk_ok;?>">
		</div>

		<div class="form-group">
		<label for="status">Status</label>
			<input type="text" class="form-control" name="status" id="status_ok" value="<?php echo $status_ok;?>">
		</div>

		<button type="submit" class="btn btn-success">Submit</button>
	</form>

</div>
</div>

<?php
}

?>

<?php
if (isset($_POST['nik'])){

$nik	= $_POST['nik'];
$nama_pelanggan	= $_POST['nama_pelanggan'];
$alamat		= $_POST['alamat'];
$tgl_masuk		= $_POST['tgl_masuk'];
$status			= $_POST['status'];



$query_update= "
update tb_pelanggan
set

	nik 			= '$nik',
	nama_pelanggan 	= '$nama_pelanggan',
	alamat 		= '$alamat',
	tgl_masuk 		= '$tgl_masuk',
	status 			= '$status'

	where no ='$id_db_pelanggan'
	";

$query_update_ok = mysqli_query($connect, $query_update);
	
if ($query_update_ok){

	header("location: http://localhost/appelanggan/daftar_pelanggan/home.php?status=SuksesUpdate");
}else{

	header("location: http://localhost/appelanggan/daftar_pelanggan/home.php?status=GagalUpdate");

}

}
else{
}
?>

</body>

</html>