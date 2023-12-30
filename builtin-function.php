<?php

// Salah satu contoh penggunaan builtin function pada php
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

// Menggunakan array_map untuk memformat data
$dataMahasiswaFormatted = array_map(function ($mahasiswa) {
    return [
        'Nama' => $mahasiswa['nama'],
        'Kelas' => $mahasiswa['kelas'],
        'Total Presensi' => $mahasiswa['total_presensi'],
        'Nilai' => $mahasiswa['nilai']
    ];
}, $mahasiswas);

echo "Formatted Data Mahasiswa:<br>";
echo "==========================<br>";
foreach ($dataMahasiswaFormatted as $mahasiswa) {
    echo "Nama: {$mahasiswa['Nama']}<br>";
    echo "Kelas: {$mahasiswa['Kelas']}<br>";
    echo "Total Presensi: {$mahasiswa['Total Presensi']}<br>";
    echo "Nilai: {$mahasiswa['Nilai']}<br>";
    echo "-------------------------<br>";
}

// Menggunakan array_column untuk mengambil satu kolom
$nilaiList = array_column($mahasiswas, 'nilai');
echo "<br>Daftar Nilai: " . implode(', ', $nilaiList) . "<br>";

// Menggunakan array_filter untuk menyaring mahasiswa dengan nilai di atas ambang batas tertentu
$mahasiswaBerprestasi = array_filter($mahasiswas, function ($mahasiswa) {
    return $mahasiswa['nilai'] > 80;
});

echo "<br>Mahasiswa Berprestasi:<br>";
echo "==========================<br>";
foreach ($mahasiswaBerprestasi as $mahasiswa) {
    echo "Nama: {$mahasiswa['nama']}<br>";
    echo "Kelas: {$mahasiswa['kelas']}<br>";
    echo "Total Presensi: {$mahasiswa['total_presensi']}<br>";
    echo "Nilai: {$mahasiswa['nilai']}<br>";
    echo "-------------------------<br>";
}
