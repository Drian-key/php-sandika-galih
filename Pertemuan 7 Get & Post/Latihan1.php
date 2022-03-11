<?php
// Variabel Scope / lingkup Variabel
// $x = 10;

// function tampilx(){
//     global $x; <= fungsi global supaya bisa membaca variabel di luar lingkup scope
//     echo $x;
// }
// tampilx();

// Variabel Super Global bawaan PHP
// Merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

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
    <title>Get</title>
    <style>
        .profile{           
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <a href="Latihan2.php?nama=<?= $mhs["nama"] ?>&nik=<?= $mhs["nik"] ?>&jurs=<?= $mhs["jurs"] ?>&email=<?= $mhs["email"] ?>&img=<?= $mhs["img"] ?>"><li><?= $mhs["nama"] ?></li></a>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>