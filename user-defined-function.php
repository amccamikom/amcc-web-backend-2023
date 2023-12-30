<?php

// variabel data mahasiswa
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

// Fungsi untuk memformat data mahasiswa
function formatMahasiswa($mahasiswa)
{
    return [
        'Nama' => $mahasiswa['nama'],
        'Kelas' => $mahasiswa['kelas'],
        'Total Presensi' => $mahasiswa['total_presensi'],
        'Nilai' => $mahasiswa['nilai']
    ];
}

// Fungsi untuk menampilkan data mahasiswa dengan HTML line break
echo "Formatted Data Mahasiswa:<br>";

function tampilkanDataMahasiswa($dataMahasiswa)
{
    echo "==========================<br>";
    foreach ($dataMahasiswa as $mahasiswa) {
        echo "Nama: {$mahasiswa['Nama']}<br>";
        echo "Kelas: {$mahasiswa['Kelas']}<br>";
        echo "Total Presensi: {$mahasiswa['Total Presensi']}<br>";
        echo "Nilai: {$mahasiswa['Nilai']}<br>";
        echo "-------------------------<br>";
    }
}

// Fungsi untuk mengambil daftar nilai
function ambilDaftarNilai($dataMahasiswa)
{
    return array_column($dataMahasiswa, 'Nilai');
}

// Fungsi untuk menyaring mahasiswa berprestasi
function mahasiswaBerprestasi($dataMahasiswa, $batasNilai)
{
    return array_filter($dataMahasiswa, function ($mahasiswa) use ($batasNilai) {
        return $mahasiswa['Nilai'] > $batasNilai;
    });
}

// Memformat data mahasiswa
$dataMahasiswaFormatted = array_map('formatMahasiswa', $mahasiswas);

// Menampilkan data mahasiswa dengan HTML line break
tampilkanDataMahasiswa($dataMahasiswaFormatted);

// Mengambil dan menampilkan daftar nilai
$nilaiList = ambilDaftarNilai($dataMahasiswaFormatted);
echo "<br>Daftar Nilai: " . implode(', ', $nilaiList) . "<br>";

// Menyaring dan menampilkan mahasiswa berprestasi
$batasPrestasi = 80;
$mahasiswaBerprestasi = mahasiswaBerprestasi($dataMahasiswaFormatted, $batasPrestasi);

echo "<br>Mahasiswa Berprestasi:<br>";
tampilkanDataMahasiswa($mahasiswaBerprestasi);
