<?php
// $mahasiswa = [
//             ["Drian", "1367", "TKJ", "riskidrian1@gmail.com"],["Key", "13367", "TKJd", "riskidrfdsian1@gmail.com"],
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Drian", 
        "nik" => "1367", 
        "jurs" => "TKJ", 
        "email" => "riskidrian1@gmail.com",
        "img" => "chor.png"
    ],
    [
        "nama" => "Driafsdn", 
        "nik" => "13367", 
        "jurs" => "TKfsdJ", 
        "email" => "riskidrsdfian1@gmail.com",
        "img" => "cln.png"
    ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiwa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs["nama"] ?></li>
        <li>NIP: <?= $mhs["nik"] ?></li>
        <li>Jurusan: <?= $mhs["jurs"] ?></li>
        <li>Email: <?= $mhs["email"] ?></li>
        <li><img src="img/<?= $mhs["img"] ?>" alt=""></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>