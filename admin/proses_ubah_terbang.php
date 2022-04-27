<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
    $airlines_id = $_POST['airlines_id'];
    $plane_no = $_POST['plane_no'];
    $departure_airport_id = $_POST['departure_airport_id'];
    $arrival_airport_id = $_POST['arrival_airport_id'];
    $seat = $_POST['seat'];
    $price = $_POST['price'];

	// buat query update
	$sql = "UPDATE flight_list SET airlines_id='$airlines_id', plane_no='$plane_no', 
    departure_airport_id='$departure_airport_id',arrival_airport_id = '$arrival_airport_id', seat='$seat' , price='$price'   WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman airport.php
		header('Location: flights.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
