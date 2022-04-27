<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $airlines_id = $_POST['airlines_id'];
    $plane_no = $_POST['plane_no'];
    $departure_airport_id = $_POST['departure_airport_id'];
    $arrival_airport_id = $_POST['arrival_airport_id'];
    $seat = $_POST['seat'];
    $price = $_POST['price'];

    // buat query
    $sql = "INSERT INTO flight_list (airlines_id,plane_no,departure_airport_id,arrival_airport_id,seat,price) 
    VALUE ('$airlines_id','$plane_no','$departure_airport_id','$arrival_airport_id','$seat','$price')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: flights.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: tambah_terbangku.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>