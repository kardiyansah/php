<?php 

require '../function/functions.php';


if ( isset($_POST["submit"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Cek username
    if ( mysqli_num_rows($result) === 1 ) {
        
        // Cek passwordnya
        $row = mysqli_fetch_assoc($result);

        if ( password_verify($password, $row["password"]) ) {
            header("Location: ../index.php");
            exit;
        }

    } 

    $error = true;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
       
       label {
            display: block;
        }

        ul li {
            margin: 6px;
       
        }

        p {
            color: red;
            font-style: italic;
        }

    </style>
</head>
<body>

<h1>Login Page</h1>

<?php if ( isset($error) ) : ?>
    <b><p>Username / Password Salah </p></b>
<?php endif; ?>

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
            <button type="submit" name="submit">Submit</button>
        </li>
    </ul>

</form>

</body>
</html>