<?php
require 'function/functions.php';

if ( isset($_POST["submit"]) ) {
    // Cek apakah data berhasil ditambahkan atau tidak
    if ( create($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
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
    <title>Create New Book</title>
    <style>
        li {
            margin: 6px;
        }
    </style>
</head>
<body>
    
<h1>Create New Book</h1>

<ul>
    <form action="" method="post" enctype="multipart/form-data">
        <li>
            <label for="book-title">Book Title : </label>
            <input type="text" name="book-title" id="book-title" required>
        </li>
        <li>
            <label for="writer">Writer : </label>
            <input type="text" name="writer" id="writer" required>
        </li>
        <li>
            <label for="publication-year">Publication Year : </label>
            <input type="text" name="publication-year" id="publication-year" required>
        </li>
        <li>
            <label for="total-pages">Total Pages : </label>
            <input type="text" name="total-pages" id="total-pages" required>
        </li>
        <li>
            <label for="image">Image : </label>
            <input type="file" name="image" id="image">
        </li>
        <li><button type="submit" name="submit">Submit</button></li>
    </form>
</ul>



</body>
</html>