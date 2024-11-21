<?php 
// user-defined function
            // parameter default
function hello($time = "Datang", $name = "Administrator") {
    return "Selamat $time, $name";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
     <?= hello("pagi", ); ?>
     

</body>
</html>