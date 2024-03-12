<?php

/** Task 2: Buat koneksi database */
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = ''; /** Isi dengan nama database yang dibuat sebelumnya */

$conn = ; /** Buat koneksi ke database dengan cara object-oriented */
if ($conn->connect_error) {
    die('Gagal membuat koneksi dengan database: ' . $conn->connect_error);
}

