<?php

$mahasiswa = [
    ["nama" => "adib", "umur" => 20], // ini adalah item ke 0
    ["nama" => "royyan", "umur" => 20], // ini adalah item ke 1
];

// dibawah ini kita mengambil item ke 0 ditandai dengan $mahasiswa[0]
echo "Halo nama saya " . $mahasiswa[0]["nama"] . " dan umur saya " . $mahasiswa[0]["umur"];
