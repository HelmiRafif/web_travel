<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $airport = $_POST['airport'];
    $location = $_POST['location'];

    // buat query
    $sql = "INSERT INTO airport_list (airport,location) VALUE ('$airport', '$location')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: airport.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: tambah_bandara.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>