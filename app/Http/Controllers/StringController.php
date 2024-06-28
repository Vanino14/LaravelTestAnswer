<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringController extends Controller
{
    public function findCharacter()
    {
        $string = 'abcdeFghijkLmnopqRstuvwXabcdeFghijkLmnopqRstuvwXabcdeFghijkLmnopqRstuvwX';
        $targetIndex = 1562231;
        $stringLength = strlen($string);
        $effectiveIndex = ($targetIndex - 1) % $stringLength;
        $character = $string[$effectiveIndex];
        return "The character at index $targetIndex is: $character";
    }
}
// //PSEUDOCODE
// Definisi String dan Indeks: String dan indeks target didefinisikan.
// Panjang String: Menggunakan strlen() untuk mendapatkan panjang string.
// Perhitungan Indeks Efektif: Menggunakan operasi modulus (%) untuk menghitung indeks efektif dalam string yang melingkar. ($targetIndex - 1) digunakan untuk menyesuaikan indeks satu berbasis ke indeks nol berbasis PHP string.
// Pengambilan Karakter: Mengambil karakter pada indeks yang dihitung.
// Pengembalian Hasil: Menampilkan karakter yang ditemukan pada indeks yang diberikan
