---
layout: course-page
title: Procedure, Trigger, dan Built-in Function
description: Procedure untuk menyimpan dan memanggil perintah SQL, Trigger memanggil perintah SQL berdasarkan event tertentu, Built-in Function menyediakan beragam fungsi untuk membantu query SQL
course-parent: Basis Data Lanjut
course-parent-url: ../../2020-2021
tags: [procedure, trigger, sql, database]
---

## Procedure
---

### Intermezo
![Kulkas - Unsplash.com @jamillatrach](https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80)

**Stored Procedure**, atau disebut juga **Procedure** dalam basis data dapat diibaratkan sebagai sebuah 'Kulkas' dari perintah-perintah SQL. 

### Pengertian Procedure

> Procedure adalah mekanisme penyimpanan perintah SQL agar dapat dipanggil di kemudian waktu.

> Procedure memiliki nama, parameter input, dan perintah SQL yang disimpan

> Procedure mirip dengan function pada bahasa pemrogrman

### Contoh Penulisan Procedure pada MySQL

#### Menghitung Data

1. Buka https://sqliteonline.com/
2. Klik **MariaDB**
3. Klik **Click to connect**
4. Buat perintah SQL seperti di bawah ini untuk menghitung total data dari tabel demo
  ```sql
  CREATE PROCEDURE HitungDemo()
  SELECT COUNT(*) AS total FROM demo;
  ```
5. Gunakan perintah SQL di bawah ini untuk memanggil procedure **HitungDemo()** yang telah dibuat
  ```sql
  CALL HitungDemo();
  ```

#### Menambahkan Data Dengan Parameter

1. Buka https://sqliteonline.com/
2. Klik **MariaDB**
3. Klik **Click to connect**
4. Buat perintah SQL seperti di bawah ini. **InsertDemo(Name, Hint)** memiliki dua buah parameter isian yaitu **Name** dan **Hint**. **InsertDemo(Name, Hint)** berisi perintah INSERT untuk menambahkan data Name dan Hint pada tabel demo.

```sql
CREATE PROCEDURE InsertDemo(IN Name VARCHAR(50), IN Hint VARCHAR(50))
INSERT INTO demo VALUES(NULL, Name, Hint);
```

5. Gunakan perintah SQL di bawah ini untuk memanggil procedure **InsertDemo(Name, Hint)** yang telah dibuat, untuk menambahkan data baru
```sql
CALL InsertDemo('Ujang', 'Menjual bubur tiap hari Senin, Rabu, Sabtu');
```

### Contoh Penulisan Procedure pada PostgreSQL

### Contoh Penulisan Procedure pada SQL Server

## Trigger
---

### Intermezo
![Toilet - Unsplash.com](https://images.unsplash.com/photo-1587527901949-ab0341697c1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80)

Gambar apakah itu ?
Ya, itu gambar wc

Kapan kita tiba-tiba berlari ke wc ?

## Built-in Function
---

### Intermezo


