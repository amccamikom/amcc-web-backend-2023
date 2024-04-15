<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa Amikom</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $m): ?>
            <li><?=$m->nama?> (<?=$m->nim?>)</li>
        <?php endforeach;?>
    </ul>
</body>
</html>