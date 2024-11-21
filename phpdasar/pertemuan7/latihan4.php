<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if ( isset($_POST["submit"] )) : ?>
        <h1>Halo Selamat Datang <?= $_POST["username"]; ?></h1> 
    <?php endif; ?>
       

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <button type="submit" name="submit">kirim</button>

    </form>
    
    
</body>
</html>