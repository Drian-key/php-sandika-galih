<?php 
    // Date
    // Untuk menampilkan tandal dala format tertentu
    // l = day, d = tanggal, m = bulan, y = tahun
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // echo time();
    // echo date("l", time()+60*60*24*17);

    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l, d, m, y", mktime(0,0,0,12,22,2004));

    // strtotime
    // echo date("l", strtotime("22 dec 2004"));
?>