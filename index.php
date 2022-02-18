<?php
require('./data/credenziali.php');

session_start();
$email = NULL;
$password = NULL;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["email"];
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["email"]) && isset($_GET["email"])) {
        $email = $_GET["email"];
        $password = $_GET["email"];
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
    }
}

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}

if (isset($_SESSION["password"])) {
    $password = $_SESSION["password"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="./style/style.css">
    <title>Index</title>
</head>

<body>
    <!-- <form action="risposta.php" method="get">
        Email:<input type="email" name="email">
        Password:<input type="password" name="password">
        <input class="submit" type="submit" value="Login">
    </form> -->

    <header>
        <div class="menu">
            <a href="index.php" class="opt">home</a>
            <a href="./pages/risposta.php" class="opt">risposta</a>
            <a href="./pages/databse.php" class="opt">database</a>
            <?php
            if (isset($email) && isset($password)) {
                echo '<a href="./pages/logout.php" class="right opt">' . 'logout' . '</a>';
            } else {
                echo '<a href="./pages/login.php" class="right opt">' . 'login' . '</a>';
            }
            ?>
        </div>

    </header>

   

    <?php
    if (isset($email) && isset($password)) {
        echo '<h1 class="mg-top-100">Bentornato, ' . $email . '</h1>';
    }
    ?>





</body>

</html>