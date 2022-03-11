<?php
// Cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nik"]) ||
    !isset($_GET["jurs"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["img"]) ){
    // Redirect
    header("Location: Latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
<ul>
    <li><img style="width: 50px; height:50px;" src="img/<?= $_GET["img"] ?>" alt=""></li>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["nik"] ?></li>
    <li><?= $_GET["jurs"] ?></li>
    <li><?= $_GET["email"] ?></li>
</ul>
<a href="Latihan1.php">Balik</a>

</body>
</html>