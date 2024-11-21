<?php  
// ini adalah komentar dalam format 1 baris
/* 
ini adalah komentar dalam format
lebih dari 1 baris
*/

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar output ( sebuah perintah diphp yang berfungsi mencetak sesuatu ke layar)
// contohnya echo, print, print_r(), var_dump()

// echo dan print hanya bisa manampilkan 1 nilai
// echo "Kardiyansah"; 
// print "Kardiyansah";

// print_r, dan var_dump bisa digunakan untuk menampilkan lebih dari nilai (contohmya array)
// print_r("Kardiyansah");
// var_dump("Kardiyansah"); // menampilkan tipe data dan ukuran variable

// penulisan sintaks PHP 
// 1.PHP didalam HTML
// 2.HTML didalam PHP

// variable dan tipe data
// tidak boleh diawali dengan angka, tapi boleh mengandung angka contohnya...
// $1nama(gak boleh), $nama1(boleh)
// variabel cara membuatnya $namevariable contohnya....
$name = "Kardiyansah";

// operator

// aritmatika
// + - * / %

// penggabung string / concatenation / concat
// .

// assigment
// =, +=, -=, /=, *=, .=

// perbandingan
// <, >, <=, >=, ==, !=

// identitas
// ===, !==

// logika
// &&, ||, !


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?= $name; // PHP didalam HTML ?></h1>
    <?php 
        echo "<h1>Halo, Selamat Datang Kardi</h1>"; // HTAML didalam PHP (tidak disarankan)
    ?>


</body>
</html>