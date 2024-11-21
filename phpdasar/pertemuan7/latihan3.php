<?php 
if ( !isset($_GET["n"]) || !iseet( $_GET["m"] ) ) {
    // redirect
    header("Location: latihan2.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
</head>
<body>
    <ul>
        <li><?= $_GET["n"]; ?></li>
        <li><?= $_GET["m"]; ?></li>
    </ul>
    
    <a href="latihan2.php">kembali</a>
    
</body>
</html>