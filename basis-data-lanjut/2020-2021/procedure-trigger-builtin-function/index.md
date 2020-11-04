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

Procedure memiliki nama, parameter input, dan perintah SQL yang disimpan. Procedure mirip dengan function pada bahasa pemrogrman. Dengan penyimpanan procedure, perintah SQL yang panjang dapat disingkat menjadi satu perintah singkat.

Terdapat perbedaan penulisan perintah SQL untuk penulisan procedure pada MySQL, PostgreSQL, SQL Server, ataupun SQL lainnya, namun secara konsep sama.

### Contoh Penulisan Procedure pada MySQL
Contoh-contoh dibawah ini menggunakan [SQLiteonline.com](https://sqliteonline.com/), aplikasi simulasi SQL online untuk SQLite, MySQL / MariaDB, PostgreSQL dan SQL Server. SQLiteonline.com memiliki tabel contoh yaitu **demo**.

#### Menghitung Data
Pada contoh ini, procedure **HitungDemo()** dibuat untuk menghitung jumlah data pada tabel demo. 
1. Buka [SQLiteonline.com](https://sqliteonline.com/)
2. Klik **MariaDB**
3. Klik **Click to connect**
4. Buat perintah SQL seperti di bawah ini untuk membuat procedure **HitungDemo()** yang didalamnya berisi perintah SQL untuk menghitung data pada tabel demo.
  ```sql
  CREATE PROCEDURE HitungDemo()
  SELECT COUNT(*) AS total FROM demo;
  ```
5. Gunakan perintah SQL di bawah ini untuk memanggil procedure **HitungDemo()** yang telah dibuat
  ```sql
  CALL HitungDemo();
  ```

#### Menambahkan Data Dengan Parameter
Pada contoh ini, procedure **InsertDemo(Name, Hint)** dibuat untuk menambah data pada tabel demo dengan parameter **Name** dan **Hint**
1. Buka [SQLiteonline.com](https://sqliteonline.com/)
2. Klik **MariaDB**
3. Klik **Click to connect**
4. Buat perintah SQL seperti di bawah ini untuk membuat procedure **InsertDemo(Name, Hint)** yang memiliki dua parameter isian yaitu **Name** dan **Hint**. **InsertDemo(Name, Hint)** berisi perintah INSERT untuk menambahkan data Name dan Hint pada tabel demo.
  ```sql
  CREATE PROCEDURE InsertDemo(IN Name VARCHAR(50), IN Hint VARCHAR(50))
  INSERT INTO demo VALUES(NULL, Name, Hint);
  ```
5. Gunakan perintah SQL di bawah ini untuk memanggil procedure **InsertDemo(Name, Hint)** yang telah dibuat, untuk menambahkan data baru
  ```sql
  CALL InsertDemo('Ujang', 'Menjual bubur tiap hari Senin, Rabu, Sabtu');
  ```

### Contoh Penulisan Procedure pada PostgreSQL
Contoh-contoh dibawah ini menggunakan [SQLiteonline.com](https://sqliteonline.com/), aplikasi simulasi SQL online untuk SQLite, MySQL / MariaDB, PostgreSQL dan SQL Server. SQLiteonline.com memiliki tabel contoh yaitu **demo**.

#### Menghitung Data
Pada contoh ini, procedure **HitungDemo()** dibuat untuk menghitung jumlah data pada tabel demo. 
1. Buka [SQLiteonline.com](https://sqliteonline.com/)
2. Klik **PostgreSQL**
3. Klik **Click to connect**
4. Buat perintah SQL seperti di bawah ini untuk membuat procedure **HitungDemo()** yang didalamnya berisi perintah SQL untuk menghitung data pada tabel demo.
  ```sql
CREATE OR REPLACE FUNCTION HitungDemo()
RETURNS TABLE(total INT) AS $$
  SELECT COUNT(*)::INT AS total FROM demo;
$$ LANGUAGE sql;
  ```
5. Gunakan perintah SQL di bawah ini untuk menampilkan data dari **HitungDemo()** yang telah dibuat
  ```sql
  SELECT * FROM HitungDemo();
  ```
  
#### Menambahkan Data Dengan Parameter
Pada contoh ini, procedure **Insert(Name, Hint)** dibuat untuk menambah data pada tabel demo dengan parameter **Name** dan **Hint**
1. Buka [SQLiteonline.com](https://sqliteonline.com/)
2. Klik **PostgreSQL**
3. Klik **Click to connect**
4. Buat perintah SQL seperti di bawah ini untuk membuat procedure **InsertDemo(ID, Name, Hint)** yang memiliki tiga parameter isian yaitu **ID**, **Name** dan **Hint**. **InsertDemo(ID, Name, Hint)** berisi perintah INSERT untuk menambahkan data Name dan Hint pada tabel demo.
  ```sql
  CREATE OR REPLACE FUNCTION InsertDemo(_id INTEGER, _name VARCHAR(50), _hint VARCHAR(50))
  RETURNS VOID AS $$
    INSERT INTO demo VALUES(_id, _name, _hint);
  $$ LANGUAGE sql;
  ```
5. Gunakan perintah SQL di bawah ini untuk memanggil procedure **InsertDemo(Name, Hint)** yang telah dibuat, untuk menambahkan data baru
  ```sql
  SELECT * FROM InsertDemo(7, 'Ujang', 'Menjual bubur tiap hari Senin, Rabu, Sabtu');
  ```

<details> 
  <summary>Q1: What is the best Language in the World? </summary>
   A1: JavaScript 
</details>

---

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


