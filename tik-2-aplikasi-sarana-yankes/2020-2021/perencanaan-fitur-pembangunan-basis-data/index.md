---
title: Penentuan Kebutuhan, Perankingan Fitur, Pembangunan Basis Data
---

## Struktur Data

MASTER DATA - USER
- ID
- Username
- Password
- Tipe pengguna [1 = Admin, 2 = dokter]

MASTER DATA - PASIEN
- ID
- No rekam medis
- No KTP
- Nama
- Tempat lahir
- Tanggal lahir
- Jenis kelamin
- Alamat
- Nomor telepon

MASTER DATA - DOKTER
- NIP
- Nama
- Nomor praktek
- Alamat
- Telepon

MASTER DATA - TINDAKAN
- Kode tindakan
- Nama tindakan

DATA TRANSAKSI - PENDAFTARAN
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
