<?php

include './config.php';

/** kita masih belum mempelajari tentang $_GET
 * jadi untuk sekarang jangan pusing dulu, singkatnya $_GET akan
 * menangkap parameter dari url lalu akan disimpn pada variabel $todoID
 */
$todoID = $_GET['todo_id'];

/** Pertama-tama kita mencari data yang ingin dihapus terlebih dahulu
 * jika todo tidak ditemukan, maka tampilkan pesan
 * Todo dengan ID X tidak ditemukan
 */
$sqlFindTodoByID = 'SELECT * FROM lists WHERE id = ?';
$searchStmt = $conn->prepare($sqlFindTodoByID);
$searchStmt->bind_param('s', $todoID);

$searchStmt->execute();
$result = $searchStmt->get_result();

if ($result->num_rows < 1) {
    die('Todo dengan ID ' . $todoID . ' tidak ditemukan');
}

/** Task 6: Menghapus todo */
/** HINT: gunakan variabel $todoID diatas untuk menghapus */
$sqlDelete = ; /** Buat query untuk menghapus todo berdasarkan ID */
$deleteStmt = ; /** Buat prepare statement */
$deleteStmt->; /** Bind parameter untuk mencegah sql injection */

$deleteStmt->execute();
header('Location: ./index.php');
