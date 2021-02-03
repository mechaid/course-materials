<?php 
    ini_set('display_errors', 1);
    include 'inisiasi_halaman.php';
    include 'fungsi_terkait_pasien.php'; 
    
    $rkm = $_GET["rkm"];
    
    /* =========================================
    Memperbahrui data pasien ke database
    ========================================= */
    
    // Cek jika ada kiriman perubahan data pasien dari form 
    if(isset($_POST["update"])) {
        
        // Menyusun data input dari kiriman form
        $data["rkm"]            = $rkm;
        $data["nama"]           = $_POST["nama"];
        $data["tempat_lahir"]   = $_POST["tempat_lahir"];
        $data["tanggal_lahir"]  = $_POST["tanggal_lahir"];
        $data["jenis_kelamin"]  = $_POST["jenis_kelamin"];
        $data["alamat"]         = $_POST["alamat"];
        $data["nomor_telepon"]  = $_POST["nomor_telepon"];
        
        // Memanggil fungsi memperbahrui data pasien
        perbahrui_data_pasien($data);
        
        // Reload halaman
        header('location:halaman_pendaftaran_pasien.php');
        exit();
    }
    
    /* ========================================
    Mengambil data pasien dari database
    ======================================== */
    
    $data_pasien = ambil_data_pasien($rkm);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perbahrui Data Pasien - Aplikasi Rawat Jalan Rumah Sakit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="layout_halaman.css" rel="stylesheet">

    </head>
    <body>
        
        <?php include 'navigasi_atas.php'; ?>
        
        <div class="halaman" id="hal-index">
            <div class="konten">
                <h1>Perbahrui Data Pasien - <?php echo $data_pasien->nama; ?></h1>
                <form class="form-daftar" id="form-daftar-rawat-jalan" action="halaman_ubah_data_pasien.php?rkm=<?php echo $rkm; ?>" method="post">
                    <div>
                        <input name="nama" type="text" placeholder="Nama" value="<?php echo $data_pasien->nama; ?>">
                    </div>
                    <div>
                        <input name="tempat_lahir" type="text" placeholder="Tempat lahir" value="<?php echo $data_pasien->tempat_lahir; ?>">
                    </div>
                    <div>
                        <input placeholder="Tanggal lahir" name="tanggal_lahir" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')" value="<?php echo $data_pasien->tanggal_lahir; ?>">
                    </div>
                    <div>
                        <input name="jenis_kelamin" value="1" type="radio" <?php echo $data_pasien->jenis_kelamin == 1 ? "checked" : ""; ?>> Laki-laki 
                        <input name="jenis_kelamin" value="2" type="radio" <?php echo $data_pasien->jenis_kelamin == 2 ? "checked" : ""; ?>> Perempuan
                    </div>
                    <div>
                        <textarea name="alamat" type="text" placeholder="Alamat"><?php echo $data_pasien->alamat; ?></textarea>
                    </div>
                    <div>
                        <input name="nomor_telepon" type="text" placeholder="Nomor telepon" value="<?php echo $data_pasien->nomor_telepon; ?>">
                    </div>
                    
                    <div>
                        <button name="update" type="submit">Perbahrui</button>
                    </div>
                </form>
                
            </div>
        </div>
        
        <?php include 'navigasi_bawah.php'; ?>
        
    </body>
</html>