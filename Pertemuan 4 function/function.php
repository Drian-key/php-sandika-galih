<?php
date_default_timezone_set("Asia/Jakarta");

$jam = date("H:i");

if ($jam > '05:30' && $jam < '10:00') {
    $salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
    $salam = 'Siang';
} elseif ($jam < '18:00') {
    $salam = 'Sore';
} else {
    $salam = 'Malam';
}

function salam($waktu = "Datang", $nama = "Admin"){
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam($salam, "Drian") ?></h1>
</body>
</html>