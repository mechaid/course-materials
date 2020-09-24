SELECT  
siswa.id_elemen_peminatan,
elemen.nama AS nama_elemen_peminatan,
COUNT(*) as jumlah
FROM siswa
JOIN elemen ON elemen.id = siswa.id_elemen_peminatan
GROUP BY siswa.id_elemen_peminatan
ORDER BY COUNT(*) DESC
