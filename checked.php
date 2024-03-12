<?php

include './config.php';

$id = $_POST['id']; /** id dari todo */
$status = $_POST['status']; /** status todo, apakah sudah selesai atau belum */

/** Task 7: Update status todo */
/** HINT: gunakan variabel $id dan $status untuk keperluan update */
$sql = ; /** Buat query untuk update status todo berdasarkan ID */
$stmt = ; /** Buat prepare statement */
$stmt->; /** Bind parameter untuk mencegah sql injection */

$stmt->execute();
