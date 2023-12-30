<?php

// Variabel data mahasiswa
$data = [
    'nama' => 'Muhammad Ammar Afif',
    'kelas' => '21S1IF02',
    'total_presensi' => 9,
    'nilai' => 60
];

// Contoh penggunaan ternary
$result = ($data['nilai'] >= 70)
    ? "Halo, " . $data['nama'] . " Selamat anda lulus dengan nilai C "
    : (($data['nilai'] >= 60 && $data['total_presensi'] >= 10)
        ? "Halo, " . $data['nama'] . " Meskipun nilai di bawah 70, namun Anda lulus karena presensi mencukupi "
        : (($data['nilai'] >= 60 && $data['total_presensi'] < 10)
            ? "Maaf " . $data['nama'] . ", Kamu belum lulus pada matakuliah ini karena presensi kurang :( "
            : "Maaf " . $data['nama'] . ", Kamu belum lulus pada matakuliah ini karena nilai dan presensi kurang :( "));

echo $result;
