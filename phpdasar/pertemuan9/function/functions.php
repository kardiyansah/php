<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($SQL_syntax) {
    global $conn;
    $result = mysqli_query($conn, $SQL_syntax);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



?>