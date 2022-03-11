<?php 
    // Belajar PHP dasar ini di tulis pada komentar baris
    /* Ini di tulis dengan komentar 
    yang bisa banyak baris */
    
    // Pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print <- Untuk mencetak variabel atau tulisan
    // print_r <- Untuk mencetak array
    // var_dump <- Menampilkan isi dari variabel dan memberitahu tipe variabel tersebut

    // Penulisan sintaks PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    // Variabel dan Tipe Data
    // Variabel 
    // Tidak boleh di awali dengan angka, tapi boleh mengandung angka
    $nama = "Drian Pratama";

    // Operator
    // aritmatika
    // + - * / %
    // $x = 10;
    // $y = 20;
    // echo $x * $y;

    // Penggabung string / concatenation / concat
    // $nama_depan = "Sandika";
    // $nama_belakang = "Galih";
    // echo $nama_depan . " " .  $nama_belakang; 

    // Assignment
    // =, +=, -=, /=, %=, .=
    // $nama = "Drian";
    // $nama .= " ";
    // $nama .= "Pratama";
    // echo $nama;

    // Perbandingan
    // <, >, <=, >=, ==, !=
    // var_dump(1 == "1");

    // Identitas
    // ===, !==
    // var_dump(1 === "1");

    // Logika
    // &&, ||, !
    $x = 30;
    var_dump($x < 20 || $x % 2 == 0);

?>  
