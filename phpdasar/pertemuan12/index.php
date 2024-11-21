<?php 
require 'function/functions.php';
$data_books = query("SELECT * FROM books");

// Jika tombol cari diclick jalankan ini
if ( isset($_POST["submit"]) ) {
    $data_books = search($_POST["search"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        td {
            text-align: center;
        }

        input {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<h1>Books list</h1>

<a href="create.php">Create New Data</a>
<br><br><br>

<form action="" method="post">
    <input type="search" name="search" size="35" autofocus placeholder="Search The Keyword Here" autocomplete="off">
    <button type="submit" name="submit">Search</button>
</form>

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
            <a href="update.php?id=<?= $data_book["id"]; ?>">Update</a> | 
            <a href="delete.php?id=<?= $data_book["id"]; ?>" onclick="return confirm('You sure');">Delete</a>
        </td>
        <td>
            <img src="img/<?= $data_book["images"]; ?>" width="40">
        </td>
        <td><?= $data_book["book_title"]; ?></td>
        <td><?= $data_book["writer"]; ?></td>
        <td><?= $data_book["publication_year"]; ?></td>
        <td><?= $data_book["total_pages"]; ?></td>
    </tr>
    <?php $id++; ?>
    <?php endforeach; ?>

</table>


</body>
</html>