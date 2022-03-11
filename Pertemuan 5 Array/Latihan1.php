<?php
// Array
// Variabel yang menampung lebih dari satu nilai
// Elemen pada array boleh menggunakan tipedata yang berbeda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// Membuat array
// Cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");

// Cara baru
$bulan = ["Januari", "Febuari", "Maret"];
$arr1 = [123, "Tulisan", true];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[1];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>