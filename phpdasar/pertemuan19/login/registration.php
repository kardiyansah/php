<?php 

require '../function/functions.php';

if ( isset($_POST["submit"]) ) {
    
    if ( registration($_POST) > 0 ) {
        echo "
            <script>
                alert('User baru berhasil ditambahkan');
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
       
       label {
            display: block;
        }

        ul li {
            margin: 6px;
       
        }

    </style>
</head>
<body>

<h1>Registration Page</h1>
    
<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password-confirmation">Password Confirmation</label>
            <input type="password" name="password-confirmation" id="password-confirmation">
        </li>
        <li>
            <button type="submit" name="submit">Submit</button>
        </li>
    </ul>
</form>

</body>
</html>