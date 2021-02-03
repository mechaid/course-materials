<?php 
    include 'inisiasi_halaman.php';
    include 'fungsi_terkait_pasien.php'; 
    include 'fungsi_terkait_rawat_jalan.php'; 
    
    /* =========================================
    Menambahkan data pasien baru ke database
    ========================================= */
    
    if(isset($_POST["submit"])) {
        print_r($_POST);
        echo "ada post";
    }
    
    /* ========================================
    Mendapatkan semua data pasien dari database
    ======================================== */
    
    $data_pasien = ambil_semua_data_pasien();
        
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Rawat Jalan - Aplikasi Rawat Jalan Rumah Sakit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="layout_halaman.css" rel="stylesheet">

    </head>
    <body>
        
        <?php include 'navigasi_atas.php'; ?>
        
        <div class="halaman" id="hal-daftar-rawat-jalan">
            <div class="konten">
                <h1>Pendaftaran Rawat Jalan</h1>
                <form class="form-daftar" id="form-daftar-rawat-jalan" method="post" action="halaman_pendaftaran_rawat_jalan.php">
                    <div>
                        <select name="rkm">
                            <option value="0" disabled selected>-- Pilih pasien --</option>
                            <?php foreach($data_pasien as $data_pasien_satuan): ?>
                                <option value="<?php echo $data_pasien_satuan->rkm; ?>">
                                    <?php echo $data_pasien_satuan->rkm; ?> - <?php echo $data_pasien_satuan->nama; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <input placeholder="Tanggal kunjungan" name="tanggal" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                    </div>
                    <div>
                        <textarea name="keluhan" type="text" placeholder="Keluhan"></textarea>
                    </div>
                    <div>
                        <textarea name="diagnosa" type="text" placeholder="Diagnosa"></textarea>
                    </div>
                    <div>
                        <select name="nip_dokter"></select>
                    </div>
                    <div>
                        <select name="kode_tindakan"></select>
                    </div>
                    <div>
                        <textarea name="resep" type="text" placeholder="Resep"></textarea>
                    </div>
                    <div>
                        <input name="total_pembayaran" type="text" placeholder="Total Pembayaran">
                    </div>
                    
                    <div>
                        <button type="submit">Tambah</button>
                    </div>
                </form>

                <div class="wadah-tabel">
                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>RKM</th>
                                <th>Nama</th>
                                <th>Keluhan</th>
                                <th>Diagnosa</th>
                                <th>Total Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php include 'navigasi_bawah.php'; ?>
        
    </body>
</html>