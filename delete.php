<?php
include "home.php";

$id_db_pelanggan = $_GET['id'];

$query_delete = "delete from tb_pelanggan where no= '$id_db_pelanggan'";

$query_delete_ok = mysqli_query($connect,$query_delete);

if ($query_delete_ok){
	
	header("location: http://localhost/appelanggan/daftar_pelanggan/home.php?status=SuksesDelete");
}else{
	header("location: http://localhost/appelanggan/daftar_pelanggan//home.php?status=GagalDelete");
}

?>