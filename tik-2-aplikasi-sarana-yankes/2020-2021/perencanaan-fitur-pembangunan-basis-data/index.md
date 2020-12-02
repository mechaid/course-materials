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

- Sebagai user, saya ingin menggunakan sistem login ke dalam sistem, agar hanya yang berwenang saja yang dapat menggunakan sistem
- Sebagai admin, saya ingin mendaftarkan pasien baru, sehingga data tersebut dapat digunakan berulang kali untuk kunjungan di kemudian hari
- Sebagai admin, saya ingin menginput kunjungan baru dari pasien, sehingga dapat ditambahkan ke rekam medis pasien
- Sebagai dokter, saya ingin melihat rekam medis pasien, sehingga dapat memberi tambahan informasi untuk diagnosa
- Sebagai pihak manajemen, saya ingin melihat laporan bulanan dari kunjungan berobat seluruh pasien, sehingga dapat memberi tambahan informasi untuk pengambilan keputusan

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
