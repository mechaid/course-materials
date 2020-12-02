---
title: Penentuan Kebutuhan, Perangkingan Fitur, Pembangunan Basis Data
---

## Penentuan Kebutuhan
Pada tahap ini, para pemegang keputusan merumuskan deskripsi sistem informasi yang dibutuhkan organisasi. Apa tujuan utama dari sistem, siapa penggunanya, apa outputnya, bagaimana mekanisme pembangunannya apakah hanya sekali bangun ataukah berkelanjutan.

Berikut contoh penentuan kebutuhan pada sebuah rumah sakit :

- **Judul**
  - Aplikasi Pendataan Pasien Untuk Rawat Jalan
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

### MASTER DATA - USER

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| ID | id | INT |
| Username | username | VARCHAR(80) |
| Password | password | VARCHAR(80) |
| Tipe user (1 = admin, 2 = dokter, 3 = manajemen) | tipe_user | TINYINT |

### MASTER DATA - PASIEN

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

### MASTER DATA - DOKTER

| Atribut | Kolom di Tabel Database | Tipe Data (MySQL) |
|---|---|---|
| ID user | id_user | INT |
| Nama | nama | VARCHAR(80) |
| Nomor praktek | nomor_praktek | VARCHAR(80) |
| Alamat | alamat | alamat |
| Nomor telepon | nomor_telepon | VARCHAR(20) |

### MASTER DATA - TINDAKAN
- Kode tindakan
- Nama tindakan
- Tarif

### DATA TRANSAKSI - PENDAFTARAN
- ID
- No registrasi
- No rekam medis
- Tanggal
- Diagnosa
- NIP dokter
- Resep
- Kode tindakan
- Total pembayaran
- Lunas
