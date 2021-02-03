<?php
    include 'koneksi_ke_database.php';
    
    /* ===================================================
    Fungsi hapus data rawat jalan dari database berdasarkan RKM
    =================================================== */
    function hapus_data_rawat_jalan_rkm($rkm) {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk menghapus data rawat jalan ini
        $pernyataan_sql = "DELETE FROM trs_rawat_jalan WHERE rkm = ?";
        
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        $query_ke_database->bind_param("s", 
            $rkm
        );
        
        // Eksekusi perintah database (SQL) untuk menghapus data rawat jalan ini
        $query_ke_database->execute();
    }
?>