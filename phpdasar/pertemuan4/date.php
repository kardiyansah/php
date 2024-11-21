<?php
// built-in function

// Cara menampilkan hari, bulan, dan tahun dengan format tertentu
// date
// echo date("l, d-M-Y");

// UNIX timestamp / EPOCH time
// detik yang sudah berlalu dari 1 january 1970 (asal mula waktu didunia komputer)
// time
// echo time();

// cara mengecek hari n kedepan
// echo date("l, d-M-Y", time() - 60 * 60 *24 * 2//n );

// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,12,25,2004));

// mirip mktime tapi formatnya waktu
// strtotime
// echo date("l", strtotime("25 dec 2004"));

// strlen() untuk mengitung panjang sebuah string
// strcamp() untuk menggabungkan 2 buah string
// explode() untuk memecah sebuah string menjadi array
// htmlspecialchars() untuk mencegah hacker

// isset() untuk mengetahui variabel sudah dibuat atau belum mengembalikan nilai boolean
// empty() untuk mengetahui variabel ada isinya atau belum
// die() untuk memberhentikan eksekusi program
// sleep() untuk mendelay program secara sementara

?>