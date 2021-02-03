<?php 
    include 'koneksi_ke_database.php';
    
    /* =========================================
    Fungsi tambah data pasien baru ke database
    ========================================= */
    function tambah_data_pasien_baru($data) {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk menambahkan data pasien baru
        $pernyataan_sql = "INSERT INTO mst_pasien (rkm, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, nomor_telepon)
        VALUES(?, ?, ?, ?, ?, ?, ?)";
        
        $rkm = round(microtime(true) * 1000);
        
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        $query_ke_database->bind_param("sssssss", 
            $rkm,
            $data['nama'],
            $data['tempat_lahir'],
            $data['tanggal_lahir'],
            $data['jenis_kelamin'],
            $data['alamat'],
            $data['nomor_telepon']
        );
        
        // Eksekusi perintah database (SQL) untuk menambahkan data pasien baru
        $query_ke_database->execute();
    }
    
    /* =========================================
    Fungsi memperbahrui data pasien ke database
    ========================================= */
    function perbahrui_data_pasien($data) {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk menambahkan data pasien baru
        $pernyataan_sql = "UPDATE mst_pasien SET nama = ?, tempat_lahir = ?, tanggal_lahir = ?, jenis_kelamin = ?, alamat = ?, nomor_telepon = ? WHERE rkm = ?";
        
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        $query_ke_database->bind_param("sssssss", 
            $data['nama'],
            $data['tempat_lahir'],
            $data['tanggal_lahir'],
            $data['jenis_kelamin'],
            $data['alamat'],
            $data['nomor_telepon'],
            $data['rkm']
        );
        
        // Eksekusi perintah database (SQL) untuk menambahkan data pasien baru
        $query_ke_database->execute();
    }
    
    /* =========================================
    Fungsi ambil semua data pasien dari database
    ========================================= */
    function ambil_semua_data_pasien() {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk mendapatkan semua data pasien 
        $pernyataan_sql = "
            SELECT 
                rkm, 
                nama, 
                CASE WHEN jenis_kelamin = 1 THEN 'Pria' ELSE 'Wanita' END as jenis_kelamin, 
                YEAR(CURRENT_TIMESTAMP) - YEAR(tanggal_lahir) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(tanggal_lahir, 5)) as umur,
                alamat
            FROM mst_pasien
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
    
    /* =========================================
    Fungsi ambil data pasien dari database
    ========================================= */
    function ambil_data_pasien($rkm) {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk mendapatkan semua data pasien 
        $pernyataan_sql = "
            SELECT 
                rkm, 
                nama, 
                jenis_kelamin, 
                tanggal_lahir,
                tempat_lahir,
                alamat,
                nomor_telepon
            FROM mst_pasien
            WHERE rkm = ?
            ORDER BY nama";
            
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        $query_ke_database->bind_param("s", 
            $rkm
        );
        
        // Eksekusi perintah database (SQL) untuk mendapatkan semua data pasien
        $query_ke_database->execute();
        
        // Membentuk struktur datanya    
        $hasil_query = $query_ke_database->get_result();
        
        // Mengembalikan variabel data pasien sebagai output
        return $hasil_query->fetch_object();
    }
    
    /* ===================================================
    Fungsi hapus data pasien dari database berdasarkan RKM
    =================================================== */
    function hapus_data_pasien_rkm($rkm) {
        
        global $koneksi_ke_database;
        
        // Menyusun perintah database (SQL) untuk menghapus data pasien ini
        $pernyataan_sql = "DELETE FROM mst_pasien WHERE rkm = ?";
        
        $query_ke_database = $koneksi_ke_database->prepare($pernyataan_sql);
        $query_ke_database->bind_param("s", 
            $rkm
        );
        
        // Eksekusi perintah database (SQL) untuk menghapus data pasien ini
        $query_ke_database->execute();
    }
    
    

?>