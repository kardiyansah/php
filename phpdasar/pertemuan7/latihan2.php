<?php 
// variabel superglobals
// variabel global milik PHP
// bentuknya array associative

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

// $_GET
// datanya bisa dikirim lewat URL dan form

var_dump($_GET);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<?php foreach ( $students as $student ) : ?>
        <ul>
            <li><a href="latihan3.php?n=<?= $student["name"]; ?>&m=<?= $student["major"]; ?>"><?= $student["name"]; ?></a></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>