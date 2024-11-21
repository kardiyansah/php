<?php 
require 'function/functions.php';
$data_books = query("SELECT * FROM books");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Books list</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>No.</td>
        <td>Actions</td>
        <td>Image</td>
        <td>Book Title</td>
        <td>Writer</td>
        <td>Publication Year</td>
        <td>Total Pages</td>
    </tr>

    <?php $id = 1 ?>
    <?php foreach ( $data_books as $data_book ) : ?>
    <tr>
        <td><?= $id; ?></td>
        <td>
            <a href="">Update</a> | 
            <a href="">Delete</a>
        </td>
        <td>
            <img src="img/<?= $data_book["image"]; ?>" width="40">
        </td>
        <td><?= $data_book["book title"]; ?></td>
        <td><?= $data_book["writer"]; ?></td>
        <td><?= $data_book["publication year"]; ?></td>
        <td><?= $data_book["total pages"]; ?></td>
    </tr>
    <?php $id++; ?>
    <?php endforeach; ?>

</table>


</body>
</html>