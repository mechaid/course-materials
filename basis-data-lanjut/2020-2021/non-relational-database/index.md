---
layout: course-page
title: Basis Data Non Relasional
description: Digunakan ketika struktur data dinamis dapat berubah-ubah
course-parent: Basis Data Lanjut
course-parent-url: ../../2020-2021
tags: [nosql, non-relasional]
---

## Intermezo

Misalkan kita butuh mengumpulkan data warga se Jawa Barat, namun sumber datanya berbeda-beda, dan informasi dari tiap sumber data berbeda-beda. 

Jika kita menggunakan basis data relasional, maka setiap ada penambahan informasi baru, ditambahkan kolom baru di basis data relasionalnya. 

Jika data sudah mencapai puluhan juta, menambah kolom baru bisa jadi memakan waktu, selain itu akan ada banyak kolom kosong.

Basis data non relasional dapat menjadi alternatif pilihan ketika ada permasalahan seperti itu.

![Contoh data non relasional](https://raw.githubusercontent.com/mechaid/course-materials/master/basis-data-lanjut/2020-2021/non-relational-database/contoh-data-non-relasional.png)

## Definisi

> Basis data non relasional adalah basis data yang strukturnya tidak mengikuti struktur data tabular kolom, dan baris basis data relasional.

> Struktur penyimpanan data pada basis data non relasional dioptimasi berdasarkan kebutuhan spesifik dari data yang akan disimpan.

> Ada empat tipe basis data non relasional yang umum digunakan yaitu **Key-Value stores**, **Column stores**, **Document stores**, **Graph stores**, dan **Multi-model**

> Berbeda dengan basis data relasional yang struktur datanya secara umum sama, dan menggunakan bahasa umum yang sama (SQL), pada basis data non relasional, cara untuk mengakses dan mengubah informasi pada basis data berbeda-beda tergantung kepada program basis datanya.

![Ilustrasi SQL dan NoSQL](https://raw.githubusercontent.com/mechaid/course-materials/master/basis-data-lanjut/2020-2021/non-relational-database/ilustrasi-sql-nosql.png)

## Tipe Basis Data Non Relasional

### Key-Value Stores

- Struktur paling sederhana
- Data disimpan menggunakan struktur **key** dan **value**. Contoh key : warga001, value : {nama: Burhan, umur: 12}
- Memudahkan scaling (menambah kapasitas sumber daya server basis data) secara horizontal
- Umum digunakan untuk : Gaming, caching dan IOT
- Contoh basis data : Redis, Memcached, etcd

### Column Stores

- Data disimpan dengan struktur mirip basis data relasional (berbasis baris dan kolom), perbedaannya nama kolom antar baris dapat berbeda-beda
- Contoh basis data : Apache Cassandra, Hbase, Datastax Enterprise, Apache Accumulo

### Document Stores

- Mirip key-value stores, lebih kompleks
- Data disimpan dengan struktur JSON
- Umum digunakan untuk : Big data, aplikasi real-time
- Contoh basis data : MongoDB, Couchbase, CouchDB, Google Firebase

### Graph Stores

- Untuk menyimpan relasi antar satuan data yang memiliki keterkaitan tinggi. Contohnya hubungan antara user media sosial.
- Umum digunakan untuk : Aplikasi social networking, analisis media sosial, aplikasi rekomendasi pilihan, dan deteksi, sistem referensi
- Contoh basis data : Neo4j, JanusGraph

### Multi-Model

- Gabungan lebih dari satu tipe basis data
- Mendapatkan keuntungan dari basis data relasional sekaligus non relasional
- Umum digunakan untuk : Data yang memerlukan beberapa struktur tipe basis data sekaligus. Contohnya PostgreSQL digunakan sebagai basis data relasional yang kolomnya dapat digunakan **document stores** untuk menyimpan data berbasis JSON.
- Contoh basis data : Oracle, SQL Server, MySQL, PostgreSQL, MongoDB

## Keuntungan dan Kelebihan

### Keuntungan

- Struktur data yang fleksibel. Dapat menampung struktur yang berbeda-beda tanpa harus mengubah-ubah struktur kolom
- Kemampuan bertumbuh secara horizontal, ketika data semakin besar server baru ditambahkan untuk menyesuaikan performa
- Kecepatan Insert data yang lebih tinggi dari basis data relasional

### Kerugian

- Support komunitas lebih sedikit, karena kebanyakan basis data non relasaional lebih muda usianya dibandingkan basis data relasional
- Tidak optimal untuk kebutuhan Transaction
- Tidak optimal untuk kebutuhan Join
- Mekanisme query yang lebih kompleks

## Contoh Penggunaan Basis Data Non Relasional

- Penyimpanan komentar dan chat dari media sosial
- Cache data pengguna hasil join dari berbagai tabel pada basis data relasional
- Penyimpanan data IOT dari sensor ketinggian air sungai yang dikirim setiap menit
- Pengelolaan konten website
- Penyimpanan data interaksi pengguna dari aplikasi smartphone
