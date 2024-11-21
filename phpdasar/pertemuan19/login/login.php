<?php 

require '../function/functions.php';

session_start();

// Cek cookienya
if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
   
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    // Cek cookie and username
    if ( $key === hash('sha256', $row['username']) ) {
        $_SESSION["login"] = true;
    }

}

if ( isset($_SESSION["login"]) ) {
    header('Location: ../index.php');
    exit;
}


if ( isset($_POST["submit"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Cek username
    if ( mysqli_num_rows($result) === 1 ) {
        
        // Cek passwordnya
        $row = mysqli_fetch_assoc($result);

        if ( password_verify($password, $row["password"]) ) {
            // Cek session
            $_SESSION["login"] = true;

            // Cek remember me
            if ( isset($_POST["remember"]) ) {
                // Buat cookienys

                setcookie('id', $row["id"], time() + 60);
                setcookie('key', hash('sha256', $row["username"]), time() + 60);
            }

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

        .remember {
            display: inline;
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
            <input type="checkbox" name="remember" id="remember" class="remember">
            <label for="remember" class="remember">Remember Me</label>
        </li>
        <li>
            <button type="submit" name="submit">Submit</button>
        </li>
    </ul>

</form>

</body>
</html>