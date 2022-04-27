<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $airlines = $_POST['airlines'];

    // buat query
    $sql = "INSERT INTO airlines_list (airlines) VALUE ('$airlines')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: airlines.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: airlines.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>