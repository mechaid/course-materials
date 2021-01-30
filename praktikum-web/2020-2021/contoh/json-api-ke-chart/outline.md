---
layout: course-page
title: Membuat Grafik Dari Web API Dengan Javascript - Contoh Kasus Rasio Dokter
description: Memanfaatkan library http request Axios dan pembuat grafik Chart.js
course-parent: Web Frontend
course-parent-url: ../../../2020-2021
tags: [javascript, web_api, chart, http_request]
---

[demo](https://mechaid.github.io/course-materials/praktikum-web/2020-2021/contoh/json-api-ke-chart/) 
[kode](https://github.com/mechaid/course-materials/blob/master/praktikum-web/2020-2021/contoh/json-api-ke-chart/index.html) 

## Latar Belakang
  - Grafik dibutuhkan di berbagai aplikasi business intelligence / dashboard :
    - Menarik kesimpulan prioritas bisnis dari data dengan bantuan visualisasi untuk pengambilan keputusan :
      - Daerah mana yang paling membutuhkan dokter 
      - Berapa banyak toko cabang yang tidak memenuhi target
      - Penyebab utama mahasiswa bernilai jelek
      - Membandingkan trend peningkatan keuntungan perusahaan 5 tahun terakhir

## Langkah Kerja
### 1. Tentukan kebutuhan konten dan bentuk grafik
  - kesehatan
  - rasio dokter per 1000 penduduk :
    - data yang tersedia :
      - web API jumlah penduduk
      - web API jumlah dokter
    - bentuk grafik :
      - grafik batang dengan dua nilai sekaligus yaitu :
        - jumlah dokter
	- jumlah rasio dokter
    - bentuk interaksi pengguna terhadap grafik

### 2. Pilih teknologi Javascript untuk membuat grafik
  - grafik kompleks dan tingkat kustomasi tinggi :
    - d3 [dokumentasi](https://github.com/d3/d3/wiki)
    - manipulasi element svg (vector) [dokumentasi](https://developer.mozilla.org/en-US/docs/Web/API/SVGElement) 
    - manipulasi element canvas (raster) [dokumentasi](https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API)
  - grafik yang konfigurasinya lebih sederhana :
    - Chart.js [dokumentasi](https://www.chartjs.org/docs/latest/general/)
    - Highcharts [dokumentasi](https://www.highcharts.com/docs/)
    - Chartist.js [dokumentasi](http://gionkunz.github.io/chartist-js/api-documentation.html)

### 3. Tentukan format data input dari teknologi pembuat grafik yang dipilih
  - Chart.js :
    - label berbentuk array contoh : ["Bandung", "Odading", "Ciroyom", "Bunga Bermekaran"]
    - nilai data berbentuk array contoh : [145, 130, 180, 177]

### 4. Ambil data dari web API
  - Teknologi HTTP request di javascript :
    - Bawaan : XMLHttpRequest [dokumentasi](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest)
    - Bawaan : Fetch [dokumentasi](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API)
    - Axios [dokumentasi](https://github.com/axios/axios#axios-api)
    - Request [dokumentasi](https://github.com/request/request)

### 5. Transformasi data dari web API ke format input teknologi pembuat grafik
  - Fungsi terkait :
    - map()

### 6. Masukan data hasil transformasi ke teknologi pembuat grafik

## Catatan Penting
  - Konsep pemrograman berorientasi objek sebagai landasan
  - Baca dan mengerti class, property, dan method penting dari teknologi yang dipilih, jangan hanya copy paste
