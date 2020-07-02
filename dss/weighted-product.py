# Weighted Product Model untuk calon suami pilihan Chelsea

# Topik pemilihan alternatif
topic = "Pemilihan calon suami Chelsea"

# List kriteria yang dinilai
criterias = [
    {"name": "Jumlah follower Instagram", "weight": 2, "effect": -1},
    {"name": "Hapalan ayat kitab suci", "weight": 7, "effect": 1},
    {"name": "Jarak kampung halaman", "weight": 3, "effect": -1},
    {"name": "Gaji bulanan", "weight": 2, "effect": 1},
    {"name": "Persentase donasi per gaji", "weight": 5, "effect": 1},
]

# List alternatif calon suami yang ada
alternatives = [
    {"name": "Justin", "cvalues": [12000, 100, 1000, 7, 20]},
    {"name": "Ridwan", "cvalues": [70, 50, 3, 21, 50]},
    {"name": "Marki", "cvalues": [300, 800, 50, 3, 70]},
]


# Fungsi untuk memilih skor tertinggi menggunakan WPM
def get_winner_wpm(criterias, alternatives, topic):

    print("=== Pencarian alternatif terbaik untuk " + topic)
    print("=== Pengambilan keputusan menggunakan Weighted Product Model")

    print("Kriteria yang dibuat (C) : ")

    for c in criterias:
        print("- " + c["name"] + " : bobot kriteria " + str(c["weight"]) + " - semakin tinggi dianggap " + ("menguntungkan" if c["effect"] == 1 else "merugikan"))
    print("===")

    print("Alternatif yang ada (A) : ")
    for a in alternatives:
        print("- " + a["name"] + " : Nilai kriteria " + str(a["cvalues"]))

    print("===")
    print("Hasil perhitungan : ")
    print("===")

    # List Bobot per kriteria
    # [2, 3, 7, 2, 5]
    criteria_weights = [float(c["weight"]) for c in criterias]

    # List Bobot per Kriteria yang dinormalisasi
    # Bobot dibagi jumlah total seluruh bobot dikalikan Efek dari bobot tersebut (positif atau negatif)
    # wi / sum(w) * e
    # [2/19, 3/19, 7/19, 2/19, 5/19]
    criteria_weights_norm = [float(c["weight"]) / sum(criteria_weights) * c["effect"] for c in criterias]

    # List Nilai per Kriteria untuk tiap Alternatif
    """
    [
        [12000, 100, 1000, 7, 20],
        [70, 50, 3, 21, 50],
        [300, 800, 50, 3, 70],
    ]
    """
    alt_criteria_values = [[float(cv) for cv in a["cvalues"]] for a in alternatives]

    # List Nilai maksimum per Kriteria untuk seluruh Alternatif
    # Contoh, follower instagram terbanyak dari tiap calon adalah 12000 (followernya Justin)
    # [12000, 800, 1000, 21, 70]
    alt_criteria_values_max = [max([v[c[0]] for v in alt_criteria_values]) for c in enumerate(criterias)]

    # List Nilai per Kriteria untuk tiap Alternatif yang telah dinormalisasi
    # Setiap nilai dibagi oleh nilai maksimum kriteria tersebut
    """
    [
        #1 [12000/12000, 100/800, 1000/1000, 7/21, 20/70],
        #2 [70/12000, 50/800, 3/1000, 21/21, 50/70],
        #3 [300/12000, 800/800, 50/1000, 3/21, 70/70],
    ]
    """
    alt_criteria_values_norm = [[v[1]/alt_criteria_values_max[v[0]] for v in enumerate(cv)] for cv in alt_criteria_values]

    #print(criteria_weights_norm)
    #print(alt_criteria_values)
    #print(alt_criteria_values_max)
    #print(alt_criteria_values_norm)

    # List score
    scores = []

    # Iterasi hitung skor dari tiap Alternatif
    for alt_index, values in enumerate(alt_criteria_values_norm):

        score = 1.0

        # Iterasi hitung skor dari nilai kriteria
        for index, v in enumerate(values):
            score *= pow(v, criteria_weights_norm[index])

        print("Skor " + alternatives[alt_index]["name"] + " : " + str(score))

        scores.append(score)

    # Indeks dimana skornya maksimum
    max_index = scores.index(max(scores))

    # Pemenang adalah Alternatif yang nilai skornya maksimum
    winner = alternatives[max_index]
    return winner


winner = get_winner_wpm(criterias, alternatives, topic)
print("Pemenang dengan skor tertinggi : " + winner["name"])
print("~* Berdasarkan bobot kriteria yang dia tetapkan sendiri, Chelsea disarankan untuk memilih " + winner["name"] + " sebagai calon suami *~")
