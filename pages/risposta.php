<?php
session_start();
$email = NULL;
$password = NULL;


// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $email=$_POST["email"];
//     $password=$_POST["email"];
// }
// if($_SERVER["REQUEST_METHOD"]=="GET"){
//     if(isset($_GET["email"])&&isset($_GET["email"])){
//         $email=$_GET["email"];
//         $password=$_GET["email"];
//     }
// }

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
    <link rel="stylesheet" href="../style/style.css">
    <title>Risposta</title>
</head>

<body>
    <?php
    if (isset($email) && isset($password)) {
        echo '<h1>Bentornato, ' . $email . '</h1>';
    } else {
        echo '<a href="./login.php" class="right opt">' . 'login' . '</a>';
    }
    ?>
</body>

</html>