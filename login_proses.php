<?php

session_start();

include 'koneksi.php';

$nik	= $_POST['nik'];
$password	= $_POST['password'];

$data	= mysqli_query($connect,"select * from tb_user where nik='$nik' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){

	$row = mysqli_fetch_assoc($data);
	$_SESSION['nik'] = $nik;
	$_SESSION['level'] = $row['nama_pelanggan'];
	$_SESSION['status'] = "login";

	if($row['level']=="1"){
		header("location:daftar_pelanggan/home.php");
	}else{
		header("location:daftar_pelanggan/home.php");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>