<?php

// Variabel array data mahasiswa
$mahasiswas = [
    [
        'nama' => 'Muhammad Ammar Afif',
        'kelas' => '21S1IF02',
        'total_presensi' => 9,
        'nilai' => 70
    ],
    [
        'nama' => 'Siti Rahmah',
        'kelas' => '21S1IF01',
        'total_presensi' => 12,
        'nilai' => 85
    ],
    [
        'nama' => 'Ahmad Faisal',
        'kelas' => '21S1IF03',
        'total_presensi' => 8,
        'nilai' => 60
    ]
];

echo "Student Information:<br>";

$i = 0;
$numberOfStudents = count($mahasiswas);

while ($i < $numberOfStudents) {
    $mahasiswa = $mahasiswas[$i];
    echo "Nama: {$mahasiswa['nama']}<br>";
    echo "Kelas: {$mahasiswa['kelas']}<br>";
    echo "Total Presensi: {$mahasiswa['total_presensi']}<br>";
    echo "Nilai: {$mahasiswa['nilai']}<br>";
    echo "-------------------------<br>";

    $i++;
}
