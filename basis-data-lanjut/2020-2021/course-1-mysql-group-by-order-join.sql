SELECT  
elemen.nama AS nama_elemen_peminatan,
COUNT(*) as jumlah
FROM siswa
JOIN elemen ON elemen.id = siswa.id_elemen_peminatan
GROUP BY elemen.nama, siswa.id_elemen_peminatan
ORDER BY COUNT(*) DESC
