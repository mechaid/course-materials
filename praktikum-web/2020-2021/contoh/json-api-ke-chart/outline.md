## Membuat Grafik Dari Web API Dengan Javascript - Contoh Kasus Rasio Dokter

[demo](https://mechaid.github.io/course-materials/praktikum-web/2020-2021/contoh/json-api-ke-chart/)

### 1. Latar belakang :
  - Grafik dibutuhkan di berbagai aplikasi business intelligence / dashboard :
    - Menarik kesimpulan prioritas bisnis dari data dengan bantuan visualisasi untuk pengambilan keputusan :
      - Daerah mana yang paling membutuhkan dokter 
      - Berapa banyak toko cabang yang tidak memenuhi target
      - Penyebab utama mahasiswa bernilai jelek
      - Membandingkan trend peningkatan keuntungan perusahaan 5 tahun terakhir

### 2. Tentukan kebutuhan konten dan bentuk grafik :
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

### 3. Pilih teknologi Javascript untuk membuat grafik :
  - grafik kompleks dan tingkat kustomasi tinggi :
    - d3
    - manipulasi svg tanpa library
  - grafik yang konfigurasinya lebih sederhana :
    - Chart.js
    - Highcharts
    - Chartist.js

### 4. Tentukan format data input dari teknologi pembuat grafik yang dipilih :
  - Chart.js :
    - label berbentuk array contoh : ["Bandung", "Odading", "Ciroyom", "Bunga Bermekaran"]
    - nilai data berbentuk array contoh : [145, 130, 180, 177]

### 5. Ambil data dari web API :
  - Teknologi HTTP request di javascript :
    - Bawaan : XMLHttpRequest
    - Bawaan : Fetch
    - Axios
    - Request

### 6. Transformasi data dari web API ke format input teknologi pembuat grafik :
  - Fungsi terkait :
    - map()

### 7. Masukan data hasil transformasi ke teknologi pembuat grafik
