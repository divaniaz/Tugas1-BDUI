<?php
include "../koneksi.php";
?>

<?php

$nik			= $_POST['nik'];
$nama_pelanggan	= $_POST['nama_pelanggan'];
$alamat		= $_POST['alamat'];
$tgl_masuk		= $_POST['tgl_masuk'];
$status		= $_POST['status'];

$query_insert= "INSERT INTO tb_pelanggan
            (nik,nama_pelanggan,alamat,tgl_masuk,status)VALUES ('$nik',
        '$nama_pelanggan',
        '$alamat',
        '$tgl_masuk',
        '$status')";


$query_insert_ok =mysqli_query($connect,$query_insert);


if ($query_insert_ok){
	
	header("location:home.php?pesan=SuksesTambah");
}else{
	header("location:home.php?pesan=GagalTambah");
}

?> 