---
title: Penentuan Kebutuhan, Perangkingan Fitur, Pembangunan Basis Data
---

## Penentuan Kebutuhan
Pada tahap ini, para pemegang keputusan merumuskan deskripsi sistem informasi yang dibutuhkan organisasi. Apa tujuan utama dari sistem, siapa penggunanya, apa outputnya, bagaimana mekanisme pembangunannya apakah hanya sekali bangun ataukah berkelanjutan.

Berikut contoh penentuan kebutuhan pada sebuah rumah sakit :

- **Tujuan**
  - Memudahkan dan mempercepat proses administrasi rawat jalan mulai dari registrasi pasien, pendaftaran, hingga pembuatan laporan bulanan.
  - Laporan dapat dibuka dari mana saja
- **Pengguna**
  - Admin
  - Dokter
  - Manajemen
- **Output**
  - Data pasien
  - Data pendaftaran
  - Rekapitulasi pendaftaran
- **Mekanisme pembangunan**
  - Berkelanjutan
- **Nama sistem**
  - Aplikasi Pendataan Pasien Untuk Rawat Jalan Berbasis Web

## Penentuan dan Perangkingan Fitur _(User Story)_
Pada tahap ini, fitur-fitur yang dibutuhkan aplikasi ditulis dan dirangking dari yang paling urgen dan penting untuk didahulukan dibuat. Cara penentuan dan perangkingan fitur yang umum dilakukan pada pembuatan aplikasi modern adalah berbasis user story (cerita pengguna) yang menitikberatkan pengadaan fitur berdasarkan kebutuhan dari para penggunanya. Pada penentuan fitur berbasis user story, alasan mengapa fitur itu diperlukan, wajib ditulis. 

Berikut contoh penentuan dan perangkingan fitur untuk contoh Aplikasi Pendataan Pasien Untuk Rawat Jalan :

| Sebagai | Saya Ingin | Sehingga | Prioritas ke |
|---|---|---|---|
| User | Menggunakan sistem login ke dalam sistem | Hanya yang berwenang saja yang dapat menggunakan sistem | 1 |
| Admin | Mendaftarkan pasien baru | Data tersebut dapat digunakan berulang kali untuk kunjungan di kemudian hari | 2 |
| Admin | Menginput kunjungan baru dari pasien | Data dapat ditambahkan ke rekam medis pasien | 3 |
| Dokter | Melihat rekam medis pasien | Dapat memberi tambahan informasi untuk diagnosa | ? |
| Manajemen | Melihat laporan bulanan dari kunjungan berobat seluruh pasien | Dapat memberi tambahan informasi untuk pengambilan keputusan | ? |

## Struktur Data
Perancangan struktur data adalah tahapan membuat tabel database untuk objek-objek yang ada pada fitur-fitur aplikasi. Tabel di database terdiri atas kolom-kolom yang memiliki nama dan tipe data tertentu. Penamaan tabel dibagi menjadi dua yaitu **tabel data master** dan **tabel data transaksi**. Tabel data master adalah tabel yang sifatnya dirujuk oleh tabel-tabel lainnya, dan jumlah datanya belum tentu bertambah seiring bertambahnya transaksi. Contohnya tabel terkait penduduk, wilayah, katalog produk, katalog tindakan rawat, dsb. Tabel data transaksi adalah tabel yang jumlah datanya selalu bertambah seiring bertambahnya transaksi. Contohnya tabel terkait transaksi penjualan, tabel terkait transaksi rawat jalan, dsb.

Berikut contoh perancangan struktur data dan struktur databasae untuk contoh Aplikasi Pendataan Pasien Untuk Rawat Jalan :

### MASTER DATA - USER
Nama tabel di database : **mst_user**

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| ID | id | INT |
| Username | username | VARCHAR(80) |
| Password | password | VARCHAR(80) |
| Nama | nama | VARCHAR(80) |
| Alamat | alamat | VARCHAR(240) |
| Nomor telepon | nomor_telepon | VARCHAR(20) |
| Tipe user (1 = admin, 2 = dokter, 3 = manajemen) | tipe_user | TINYINT |

### MASTER DATA - PASIEN
Nama tabel di database : **mst_pasien**

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| Nomor rekam medis | rkm | VARCHAR(20) |
| Nomor KTP | nik | VARCHAR(20) |
| Nama | nama | VARCHAR(80) |
| Tempat lahir | tempat_lahir | VARCHAR(40) |
| Tanggal lahir | tanggal_lahir | DATE |
| Jenis kelamin (1 = pria, 2 = wanita) | jenis_kelamin | TINYINT |
| Alamat | alamat | VARCHAR(240) |
| Nomor telepon | nomor_telepon | VARCHAR(20) |
| Waktu input | waktu_input | TIMESTAMP |

### MASTER DATA - DOKTER
Nama tabel di database : **mst_dokter**

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| ID user | id_user | INT |
| NIP | nip | VARCHAR(20) |
| Nomor praktek | nomor_praktek | VARCHAR(80) |

### MASTER DATA - TINDAKAN
Nama tabel di database : **mst_tindakan**

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| Kode | kode | VARCHAR(20) |
| Nama | nama | VARCHAR(200) |
| Tarif | tarif | INT |

### DATA TRANSAKSI - RAWAT JALAN
Nama tabel di database : **trs_rawat_jalan**

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| ID | id | INT |
| Nomor rekam medis | rkm | VARCHAR(20) |
| Tanggal | tanggal | DATE |
| Keluhan | keluhan | TEXT |
| Diagnosa | diagnosa | TEXT |
| NIP dokter | nip_dokter | VARCHAR(20) |
| Resep | resep | TEXT |
| Kode tindakan | kode_tindakan | VARCHAR(20) |
| Total pembayaran | total_pembayaran | INT |
| Pembayaran telah lunas ? (0 = belum, 1 = sudah) | is_lunas | TINYINT |
| Status | status | TINYINT |
| Waktu input | waktu_input | TIMESTAMP |
