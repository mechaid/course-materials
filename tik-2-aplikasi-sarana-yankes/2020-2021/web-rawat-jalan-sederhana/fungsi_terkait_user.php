<?php
    include 'koneksi_ke_database.php';

    /* =========================================
    Fungsi login
    ========================================= */
    function login($nama_user_aplikasi, $password_user_aplikasi) {
        
        global $koneksi_ke_database;
        
        $password_user_aplikasi_telah_dihash = hash("sha256", $password_user_aplikasi);
        
        // Menyusun perintah database (SQL) untuk cek keberadaan user dengan password tersebut
        $pernyataan_sql = "SELECT * FROM mst_user WHERE username = ? AND password = ?";
        
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        $query_ke_database->bind_param("ss", $nama_user_aplikasi, $password_user_aplikasi_telah_dihash);
        
        // Eksekusi perintah database (SQL) untuk cek keberadaan user dengan password tersebut
        $query_ke_database->execute();
        
        $hasil_query = $query_ke_database->get_result();
        $total_data_hasil_query = $hasil_query->num_rows;
        
        // Kondisi login berhasil atau gagal
        if($total_data_hasil_query > 0) {
            return true;
        } else {
            return false;
        }
    }
    

?>