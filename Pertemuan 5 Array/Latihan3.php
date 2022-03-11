<?php
$mahasiswa = [
    ["Drian", "234234234", "TKJ", "riskidrian1@gmail.com"], 
    ["Riski", "234234234", "AKL", "sadfjasd@gmail.com"], 
    ["Pratama", "234234234", "TKR", "riana@gmail.com"]
];

$guru = [
    ["Arif Febriadi", "AIJ", "TKJ", "laki-laki"],
    ["Rafli Setiawan", "ALL", "TKJ", "Laki-Laki"],
    ["Jarwo", "Kepala Sekolah", "TKR", "Wanita"]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0] ?></li>
        <li>NIP: <?= $mhs[1] ?></li>
        <li>Jurusan: <?= $mhs[2] ?></li>
        <li>Email: <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>

    <h1>Daftar Guru</h1>

    <?php foreach($guru as $g) : ?>
    <ul>
        <li><?= $g[0] ?></li>
        <li><?= $g[1] ?></li>
        <li><?= $g[2] ?></li>
        <li><?= $g[3] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>