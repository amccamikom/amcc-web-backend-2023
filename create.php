<?php

include './config.php';

/** kita masih belum mempelajari tentang $_POST
 * jadi untuk sekarang jangan pusing dulu, singkatnya $_POST akan
 * menangkap input yang diketikkan pada form lalu akan disimpn pada variabel $todo
 */
$todo = $_POST['todo'];
if (!$todo) {
    header('Location: ./index.php');
}

/** Task 5: Menambah todo */
$sql = ; /** Buat query untuk memasukkan data kedalam tabel lists */
$stmt = ; /** Buat prepare statement */
$stmt->; /** Bind parameter untuk mencegah sql injection */

$result = $stmt->execute();
if (!$result) {
    die('Gagal menambahkan todo');
}

header('Location: ./index.php');
