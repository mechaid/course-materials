-- Microsoft SQL Server

CREATE TABLE siswa (
    id INT NOT NULL PRIMARY KEY IDENTITY,
    nama VARCHAR(255),
    jenis_kelamin TINYINT,
    alamat VARCHAR(255),
    tanggal_lahir DATE,
    id_elemen_peminatan TINYINT,
    kode_wilayah VARCHAR(10)
);

INSERT INTO siswa VALUES
('Wawan Junaedi', 1, 'Komplek Rancacelsea no. 33', '2006-03-13', 3, '3273'),
('Karsimah', 2, 'Jalan Jamparing Kulon 88 B', '2007-08-11', 6, '3204'),
('Windy Zeroblast', 2, 'Jalan Kautamaan Sedekah no. 13', '2007-09-15', 1, '3277'),
('Kankan Sukamtar', 1, 'Blok Kayu Jati 28B/66 RW 01 RT 03', '2006-01-28', 4, '3277'),
('Ginyawa', 1, 'Jalan Paseman Legok No. 29 Babakan Hilir', '2007-11-04', 1, '3273'),
('Pande Rereogan', 1, 'Jalan Kulitiba No. 2A', '2008-04-09', 1, '3277'),
('Wakun Carmadi', 1, 'Jalan Daringlila No 9', '2007-04-28', 4, '3217'),
('Vincent Vinal Vantasi', 1, 'Jl. Kersamanah Kidul No 33', '2007-12-21', 6, '3211'),
('Wildan Andi P.', 1, 'Blok B6 No. 17 Komplek Pancawasra', '2007-06-04', 5, '3204'),
('Selena Zainulmutakin', 2, 'Komplek Perlantaskorda Blok J3 No. 29', '2008-03-17', 6, '3273'),
('Binoronggo Saswajiman', 1, 'Jl. Santosa Seharila No. 77 Blok C3', '2007-07-18', 2, '3273'),
('Dolan', 1, 'Jalan Serengeti Raya No. 33', '2007-04-25', 6, '3205'),
('Priyanka Ercel', 2, 'Jalan Golf Awis Rupiah No. 68 C', '2006-10-23', 6, '3277'),
('Urassaya Lambada', 2, 'Komplek Tegalwacan Blok D3 No 6', '2007-09-08', 3, '3204'),
('Miranda Syakifa', 2, 'Jl. Arawanah Raya 99 B', '2007-10-25', 4, '3204'),
('Jungalijo Nganginosre', 1, 'RW 05 RT 07 Dusun Hejosanes Desa Sukmataja Kec Arantaua', '2007-03-16', 2, '3203'),
('Kacaigar Windsdeep', 1, 'Jalan Terminal Barokah No. 6', '2007-04-21', 4, '3204'),
('Siangas Has', 1, 'Dusun Wirotelu RT 03 RW 12 Desa Jaritu Kec. Awugcica', '2006-08-04', 1, '32'),
('Latifah Cihujan', 2, 'Desa Airlancang Blok G2 No. 13', '2008-02-27', 5, '3201'),
('Lisa Goodyear', 2, 'Jalan Raya Sakernas No. 281 A', '2007-09-18', 3, '3273');

CREATE TABLE kode_wilayah (
    kode VARCHAR(11),
    nama VARCHAR(40),
    tingkat TINYINT
);

INSERT INTO kode_wilayah VALUES
('3201', 'Kabupaten Bogor', 2),
('3202', 'Kabupaten Sukabumi', 2),
('3203', 'Kabupaten Cianjur', 2),
('3204', 'Kabupaten Bandung', 2),
('3205', 'Kabupaten Garut', 2),
('3206', 'Kabupaten Tasikmalaya', 2),
('3207', 'Kabupaten Ciamis', 2),
('3208', 'Kabupaten Kuningan', 2),
('3209', 'Kabupaten Cirebon', 2),
('3210', 'Kabupaten Majalengka', 2),
('3211', 'Kabupaten Sumedang', 2),
('3212', 'Kabupaten Indramayu', 2),
('3213', 'Kabupaten Subang', 2),
('3214', 'Kabupaten Purwakarta', 2),
('3215', 'Kabupaten Karawang', 2),
('3216', 'Kabupaten Bekasi', 2),
('3217', 'Kabupaten Bandung Barat', 2),
('3218', 'Kabupaten Pangandaran', 2),
('3271', 'Kota Bogor', 2),
('3272', 'Kota Sukabumi', 2),
('3273', 'Kota Bandung', 2),
('3274', 'Kota Cirebon', 2),
('3275', 'Kota Bekasi', 2),
('3276', 'Kota Depok', 2),
('3277', 'Kota Cimahi', 2),
('3278', 'Kota Tasikmalaya', 2),
('3279', 'Kota Banjar', 2);

CREATE TABLE elemen (
    id INT NOT NULL PRIMARY KEY IDENTITY,
    nama VARCHAR(40)
);

INSERT INTO elemen VALUES
('Api'),
('Angin'),
('Petir'),
('Bumi'),
('Air'),
('Perasaan');
