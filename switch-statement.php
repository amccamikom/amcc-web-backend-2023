<?php

// variabel yang berisi data mahasiswa
$data = [
    'nama' => 'Muhammad Ammar Afif',
    'kelas' => '21S1IF02',
    'total_presensi' => 9,
    'nilai' => 60
];

// Contoh penggunaan switch statements
$grade = '';
switch (true) {
    case ($data['nilai'] >= 70):
        $grade = 'C';
        break;
    case ($data['nilai'] >= 60 && $data['total_presensi'] >= 10):
        $grade = 'C (dengan presensi mencukupi)';
        break;
    case ($data['nilai'] >= 60 && $data['total_presensi'] < 10):
        $grade = 'Belum Lulus (presensi kurang)';
        break;
    default:
        $grade = 'Belum Lulus (nilai dan presensi kurang)';
}
echo "Halo, " . $data['nama'] . " Selamat Anda lulus dengan nilai $grade";
