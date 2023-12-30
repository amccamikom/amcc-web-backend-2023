<?php

// variabel yang berisi data mahasiswa
$data = [
    'nama' => 'Muhammad Ammar Afif',
    'kelas' => '21S1IF02',
    'total_presensi' => 9,
    'nilai' => 60
];


// Contoh penggunaan if-else
if ($data['nilai'] >= 70) {
    echo "Selamat anda lulus!";
} else {
    echo "Maaf yah, kamu harus mengulang matakuliah ini :(";
}
echo "<br>";


// Contoh penggunaan if-elseif
if ($data['nilai'] >= 100) {
    echo "Halo, " . $data['nama'] . " Selamat anda lulus dengan nilai A ";
} elseif ($data['nilai'] >= 80) {
    echo "Halo, " . $data['nama'] . " Selamat anda lulus dengan nilai B ";
} elseif ($data['nilai'] >= 70) {
    echo "Halo, " . $data['nama'] . " Selamat anda lulus dengan nilai C ";
} else {
    echo "Maaf " . $data['nama'] . ", kamu belum lulus pada matakuliah ini :( ";
}
echo "<br>";


// Contoh penggunaan if else bersarang
if ($data['nilai'] >= 70) {
    echo "Halo, " . $data['nama'] . " Selamat anda lulus dengan nilai C ";
} else {
    if ($data['nilai'] >= 60 && $data['total_presensi'] >= 10) {
        echo "Halo, " . $data['nama'] . " Meskipun nilai di bawah 70, namun Anda lulus karena presensi mencukupi ";
    } elseif ($data['nilai'] >= 60 && $data['total_presensi'] < 10) {
        echo "Maaf " . $data['nama'] . ", Kamu belum lulus pada matakuliah ini karena presensi kurang :( ";
    } else {
        echo "Maaf " . $data['nama'] . ", Kamu belum lulus pada matakuliah ini karena nilai dan presensi kurang :( ";
    }
}
