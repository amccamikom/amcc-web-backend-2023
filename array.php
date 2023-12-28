<?php

// ada dua cara untuk membuat array
$buah = array('pisang', 'apel', 'duren'); // cara 1
$warna = ['merah', 'biru', 'kuning']; // cara 2

//menampilkan seluruh isi array
var_dump($buah);

// INFO : tag <br> digunakan untuk membuat baris baru
echo "<br>";

// menampilkan item didalam array menggunakan index (index dimulai dari 0)
echo "Warna favorit saya adalah " . $warna[0];
