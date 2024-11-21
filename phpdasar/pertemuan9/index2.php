<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil / query data dari tabel yang ada didalam database
$result = mysqli_query($conn, "SELECT * FROM books");

// Ambil data(fetch) books dari object $result caranya....
// mysqli_fetch_row() mengembalikan array numerik(indeksnya angka)
// mysqli_fetch_assoc() mengembalikan array asosiatif
// mysqli_fetch_array() mengembalikan array numerik dan array asosiatif
// mysqli_fetch_object() mengembalikan object

// while ( $books = mysqli_fetch_assoc($result) ) {
//     var_dump($books);
// }



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
    <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $id; ?></td>
        <td>
            <a href="">Update</a> | 
            <a href="">Delete</a>
        </td>
        <td>
            <img src="img/<?= $row["image"]; ?>" width="40">
        </td>
        <td><?= $row["book title"]; ?></td>
        <td><?= $row["writer"]; ?></td>
        <td><?= $row["publication year"]; ?></td>
        <td><?= $row["total pages"]; ?></td>
    </tr>
    <?php $id++; ?>
    <?php endwhile; ?>

</table>


</body>
</html>