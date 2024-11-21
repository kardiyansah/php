<?php 
$allstudents = [
    ["Kardiyansah", "09876543", "Teknik Informatika", "Email"],
    ["tahir", "09876543", "Teknik Mesin", "Email"],
    ["alexander", "09876543", "Teknik planologi", "Email"]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<?php foreach ( $allstudents as $students ) : ?>
<ul>
  <?php foreach ( $students as $student) : ?>
      <li><?= $student; ?></li>
  <?php endforeach; ?>
</ul>
<?php endforeach; ?>

</body>
</html>