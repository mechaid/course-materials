<?php 
    include 'koneksi_ke_database.php';
    
    /* =========================================
    Fungsi tambah data dokter baru ke database
    ========================================= */
    function tambah_data_dokter_baru($data) {
        
        global $koneksi_ke_database;
    }
    
    /* =========================================
    Fungsi ambil semua data dokter dari database
    ========================================= */
    function ambil_semua_data_dokter() {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk mendapatkan semua data dokter 
        $pernyataan_sql = "
            SELECT 
                u.username,
                u.nama,
                d.nip,
                d.nomor_praktek
            FROM mst_user u
            INNER JOIN mst_dokter d
            ON u.id = d.id_user
            WHERE u.tipe_user <> 1
            ORDER BY nama";
            
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        
        // Eksekusi perintah database (SQL) untuk mendapatkan semua data pasien
        $query_ke_database->execute();
        
        // Membentuk struktur datanya    
        $hasil_query = $query_ke_database->get_result();
        
        $semua_data_pasien = array();
        
        while($hasil_query_satuan = $hasil_query->fetch_object()) {
            array_push($semua_data_pasien, $hasil_query_satuan);
        };
        
        // Mengembalikan variabel $semua_data_pasien sebagai output
        return $semua_data_pasien;
        
    }
    
    /* ======================================================
    Fungsi hapus data dokter dari database berdasarkan id user
    ====================================================== */
    function hapus_data_dokter($id_user) {
        
        global $koneksi_ke_database;
        
    }
?>