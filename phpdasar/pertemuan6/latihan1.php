<?php 
// array associative
// array associative indeknya berupa string
$students = [
    [
        "name" => "Kardiyansah", 
        "nrp" => "12345678", 
        "major" => "Teknik Informatika", 
        "email" => "Email"
    ],
    [
        "name" => "Laszlo", 
        "nrp" => "12345678", 
        "major" => "Teknik Meisn", 
        "email" => "Email"
    ]
];

// cara menpilkan array associative
echo $students[0]["name"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $students as $student ) : ?>
        <ul>
            <li><?= $student["name"]; ?></li>
            <li><?= $student["nrp"]; ?></li>
            <li><?= $student["major"]; ?></li>
            <li><?= $student["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>