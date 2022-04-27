<?php

include("koneksi.php");

if( isset($_GET['airlines_id']) ){
	
	// ambil id dari query string
	$id = $_GET['airlines_id'];
	
	// buat query hapus
	$sql = "DELETE FROM airlines_list WHERE airlines_id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: airlines.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
