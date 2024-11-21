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


function create($data) {
    // $data berasal dari variabel global $_POST
    global $conn;
    // Ambil / query data dari $_POST
    $book_title = htmlspecialchars($data["book-title"]);
    $writer = htmlspecialchars($data["writer"]);
    $publication_year = htmlspecialchars($data["publication-year"]);
    $total_pages = htmlspecialchars($data["total-pages"]);
    $image = htmlspecialchars($data["image"]);
    
    // masukan / insert data kedalam tabel didatabase phpdasar
    $SQL_syntax = "INSERT INTO books VALUES 
                    ('', '$book_title', '$writer', '$publication_year', '$total_pages', '$image')
                ";
    mysqli_query($conn, $SQL_syntax);

    return mysqli_affected_rows($conn);
}


function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}





?>