# README

## Soal No. 1

Untuk hasil dari nilai karakter dapat diakses pada route: `https://your_url(localhost)/find-character`

### Pseudocode

1. **Definisikan String dan Indeks**: String dan indeks target didefinisikan.
2. **Panjang String**: Menggunakan `strlen()` untuk mendapatkan panjang string.
3. **Perhitungan Indeks Efektif**: Menggunakan operasi modulus (`%`) untuk menghitung indeks efektif dalam string yang melingkar. `($targetIndex - 1)` digunakan untuk menyesuaikan indeks satu berbasis ke indeks nol berbasis PHP string.
4. **Pengambilan Karakter**: Mengambil karakter pada indeks yang dihitung.
5. **Pengembalian Hasil**: Menampilkan karakter yang ditemukan pada indeks yang diberikan.

## Soal No. 2

### Stored Function MostFrequent()

```sql
DELIMITER //

CREATE FUNCTION MostFrequent() 
RETURNS VARCHAR(20)
DETERMINISTIC
BEGIN
    DECLARE result VARCHAR(20);
    
    SELECT nopol INTO result
    FROM (SELECT nopol, COUNT(*) AS frequency
          FROM kendaraan
          GROUP BY nopol
          ORDER BY frequency DESC, nopol ASC
          LIMIT 1) AS freq;
    
    RETURN result;
END //

DELIMITER ;
```

Migrasi Tabel Kendaraan: Jalankan perintah berikut untuk melakukan migrasi tabel:

```bash
  php artisan migrate
```

Seed Data: Jalankan perintah berikut untuk mengisi data ke dalam tabel:
```bash
   php artisan db:seed
```

Akses List Data Kendaraan: Data kendaraan dapat diakses dengan URL:
```bash
   https://your_url(localhost)/kendaraan
```

Akses Frekuensi Terbanyak: Nomor kendaraan dengan frekuensi terbanyak dapat diakses dengan URL

```bash
   https://your_url(localhost)/kendaraan/most-frequent
```
# LaravelTestAnswer
