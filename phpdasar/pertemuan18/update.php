<?php

session_start();

if ( !isset($_SESSION["login"]) ) {
    header('Location: login/login.php');
    exit;
}

require 'function/functions.php';

// Ambil data diURL
$id = $_GET["id"];

// Query data books berdasarkan id
$book = query("SELECT * FROM books WHERE id = $id")[0];

// Cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"]) ) {
    // Cek apakah data berhasil diubah atau tidak
    if ( update($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php'

            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Book</title>
    <style>
        ul form li img {
            display: block;
            margin: 8px;
        }

        li {
            margin: 6px;
        }
    </style>
</head>
<body>
    
<h1>Update Data Book</h1>
<ul>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $book["id"]; ?>">
        <input type="hidden" name="old-image" value="<?= $book["images"]; ?>">
        <li>
            <label for="book-title">Book Title : </label>
            <input type="text" name="book-title" id="book-title" required value="<?= $book["book_title"]; ?>">
        </li>
        <li>
            <label for="writer">Writer : </label>
            <input type="text" name="writer" id="writer" required value="<?= $book["writer"]; ?>">
        </li>
        <li>
            <label for="publication-year">Publication Year : </label>
            <input type="text" name="publication-year" id="publication-year" required value="<?= $book["publication_year"]; ?>">
        </li>
        <li>
            <label for="total-pages">Total Pages : </label>
            <input type="text" name="total-pages" id="total-pages" required value="<?= $book["total_pages"]; ?>">
        </li>
        <li>
            <label for="image">Image : </label>
            <img src="img/<?= $book["images"]; ?>">
            <input type="file" name="image" id="image">
        </li>
        <li><button type="submit" name="submit">Submit</button></li>
    </form>
</ul>



</body>
</html>