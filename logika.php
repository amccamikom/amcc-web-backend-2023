<?php

$benar = true;
$salah = false;

$logikaAnd = $benar && $salah; // dua duanya harus benar maka hasilnya true jika tidak maka false
$logikaOr = $salah || $benar; // salah satu atau 22nya harus benar maka hasilnya true jika tidak false
$logikaNot = !$salah; // kebalikannya (salah jadi benar, benar jadi salah)

// INFO : tag <br> digunakan untuk membuat baris baru

// INFO : dibawah ini menggunakan ternary operator, teman teman bisa explore sendiri ya
// Contoh ternary operator : $logikaAnd ? "Benar" : "Salah"

echo "Hasil logika and adalah " . ($logikaAnd ? "Benar" : "Salah") . "<br>";
echo "Hasil logika or adalah " . ($logikaOr ? "Benar" : "Salah") . "<br>";
echo "Hasil logika not adalah " . ($logikaNot ? "Benar" : "Salah") . "<br>";
