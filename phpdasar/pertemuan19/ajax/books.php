<?php 

require '../function/functions.php';

$search = $_GET['search'];

$query = "SELECT * FROM books WHERE 
            book_title LIKE '%$search%' OR
            writer LIKE '%$search%' OR
            publication_year LIKE '%$search%' OR
            total_pages LIKE '%$search%'
        ";
$data_books = query($query);

?>

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