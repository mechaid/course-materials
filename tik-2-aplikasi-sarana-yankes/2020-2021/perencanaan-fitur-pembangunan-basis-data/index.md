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

## Penentuan dan Perangkingan Fitur

- Aplikasi Rawat Jalan

## Struktur Data

### MASTER DATA - USER
- ID
- Username
- Password
- Tipe pengguna [1 = Admin, 2 = dokter]

### MASTER DATA - PASIEN
- ID
- No rekam medis
- No KTP
- Nama
- Tempat lahir
- Tanggal lahir
- Jenis kelamin
- Alamat
- Nomor telepon

### MASTER DATA - DOKTER
- NIP
- Nama
- Nomor praktek
- Alamat
- Telepon

### MASTER DATA - TINDAKAN
- Kode tindakan
- Nama tindakan

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
