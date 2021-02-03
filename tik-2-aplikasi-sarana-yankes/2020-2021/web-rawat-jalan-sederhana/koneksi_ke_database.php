<?php 
    $nama_database = "";
    $nama_user_database = "";
    $password_user_database = "";
    
    // Membuat objek koneksi ke database
    $koneksi_ke_database = new mysqli("localhost", $nama_user_database, $password_user_database, $nama_database);
    
    // Pengecekan apabila terdapat kesalahan koneksi
    if ($koneksi_ke_database->connect_errno) {
        echo "Gagal koneksi ke MySQL: (" . $koneksi_ke_database->connect_errno . ") " . $koneksi_ke_database->connect_error;
        exit();
    }
?>