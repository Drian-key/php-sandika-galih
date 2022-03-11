<?php
session_start();
require "functions.php";

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    //ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row["username"])){
        $_SESSION["login"] = true;
    }

}


if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}



if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result)){
        $rows = mysqli_fetch_assoc($result);
        if (password_verify($password, $rows["password"])) {
            $_SESSION["login"] = true;

            // cek cookie
            if(isset($_POST["remember"])){
                setcookie('id', $rows['id'], time()+60);
                setcookie('key', hash('sha256', $rows["username"]), time()+60);
            }

            echo "<script>
                alert('Berhasil registrasi');
            </script>";
            header("Location: index.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <?php if(isset($error)) : ?>
    <p>Username/Password salah</p>
    <?php endif; ?>

    <h1>Halaman Login</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me.</label>
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>