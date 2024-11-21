<?php 
// array
// array adalah sebuah variabel yang bisa menampung banyak nilai
// nilai dalam array disebut element
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key and value
// keynya adalah index, yang dimulai dari 0

// cara membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["january", "february", "march"];
$acak = [1, "king", true];

// menampilkan array
// var_dump($hari);
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo $acak[1];
// echo "<br>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);

?>