<?php 
    ini_set('display_errors', 1);
    include 'inisiasi_halaman.php';
    include 'fungsi_terkait_pasien.php'; 
    include 'fungsi_terkait_rawat_jalan.php'; 
    
    /* =========================================
    Menambahkan data pasien baru ke database
    ========================================= */
    
    // Cek jika ada kiriman data pasien baru dari form 
    if(isset($_POST["submit"])) {
        
        // Menyusun data input dari kiriman form
        $data["nama"]           = $_POST["nama"];
        $data["tempat_lahir"]   = $_POST["tempat_lahir"];
        $data["tanggal_lahir"]  = $_POST["tanggal_lahir"];
        $data["jenis_kelamin"]  = $_POST["jenis_kelamin"];
        $data["alamat"]         = $_POST["alamat"];
        $data["nomor_telepon"]  = $_POST["nomor_telepon"];
        
        // Memanggil fungsi penambahan data pasien baru
        tambah_data_pasien_baru($data);
        
        // Reload halaman
        header('location:halaman_pendaftaran_pasien.php');
        exit();
    }
    
    /* ========================================
    Mendapatkan semua data pasien dari database
    ======================================== */
    
    $data_pasien = ambil_semua_data_pasien();
    
    /* =======================================
    Menghapus data pasien dari database
    ======================================= */
    
    // Cek jika ada parameter URL untuk menghapus data pasien berdasarkan RKM
    if(isset($_GET['hapus']) && isset($_GET['rkm'])) {
        
        $rkm    = $_GET['rkm'];
        
        // Menghapus data pasien berdasarkan RKM
        hapus_data_pasien_rkm($rkm);
        
        // Hapus juga riwayat rawat jalan pasien tersebut berdasarkan RKM
        hapus_data_rawat_jalan_rkm($rkm);
        
        // Reload halaman
        header('location:halaman_pendaftaran_pasien.php');
        exit();
        
    }

        
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Pasien - Aplikasi Rawat Jalan Rumah Sakit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="layout_halaman.css" rel="stylesheet">

    </head>
    <body>
        
        <?php include 'navigasi_atas.php'; ?>
        
        <div class="halaman" id="hal-index">
            <div class="konten">
                <h1>Pendaftaran Pasien</h1>
                <form class="form-daftar" id="form-daftar-rawat-jalan" action="halaman_pendaftaran_pasien.php" method="post">
                    <div>
                        <input name="nama" type="text" placeholder="Nama">
                    </div>
                    <div>
                        <input name="tempat_lahir" type="text" placeholder="Tempat lahir">
                    </div>
                    <div>
                        <input placeholder="Tanggal lahir" name="tanggal_lahir" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                    </div>
                    <div>
                        <input name="jenis_kelamin" value="1" type="radio"> Laki-laki <input name="jenis_kelamin" value="2" type="radio"> Perempuan
                    </div>
                    <div>
                        <textarea name="alamat" type="text" placeholder="Alamat"></textarea>
                    </div>
                    <div>
                        <input name="nomor_telepon" type="text" placeholder="Nomor telepon">
                    </div>
                    
                    <div>
                        <button name="submit" type="submit">Tambah</button>
                    </div>
                </form>
                
                <div class="wadah-tabel">
                    <table>
                        <thead>
                            <tr>
                                <th>RKM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data_pasien as $data_pasien_satuan): ?>
                                <tr>
                                    <td><?php echo $data_pasien_satuan->rkm; ?></td>
                                    <td><?php echo $data_pasien_satuan->nama; ?></td>
                                    <td><?php echo $data_pasien_satuan->jenis_kelamin; ?></td>
                                    <td><?php echo $data_pasien_satuan->umur; ?></td>
                                    <td><?php echo $data_pasien_satuan->alamat; ?></td>
                                    <td>
                                        <a class="tombol-kecil" href="halaman_ubah_data_pasien.php?rkm=<?php echo $data_pasien_satuan->rkm; ?>">Ubah</a>
                                        <a class="tombol-kecil" href="halaman_pendaftaran_pasien.php?hapus=1&rkm=<?php echo $data_pasien_satuan->rkm; ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php include 'navigasi_bawah.php'; ?>
        
    </body>
</html>