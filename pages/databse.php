<?php
require('../data/credenziali.php');
session_start();
$email = NULL;
$password = NULL;

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
    <title>Database</title>
</head>

<body>
    <header>
        <div class="menu">
            <a href="../index.php" class="opt">home</a>
            <a href="./risposta.php" class="opt">risposta</a>
            <a href="./databse.php" class="opt">database</a>
            <?php
            if (isset($email) && isset($password)) {
                echo '<a href="./logout.php" class="right opt">' . 'logout' . '</a>';
            } else {
                echo '<a href="./login.php" class="right opt">' . 'login' . '</a>';
            }
            ?>
        </div>
    </header>
 
    <?php
    if (isset($email) && isset($password)) {
        echo '<h1 class="mg-top-100">Bentornato, ' . $email . '</h1>';
    }
    ?>
    <div class="flex mg-top-200">
        <?php
            $conn = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
            
            if($conn->connect_error){
                die("<p>Connessione fallita!".$conn->connect_error."</p>");
            }
            $query="
            SELECT titolo
            FROM film
            ";
            $ris = $conn->query($query) or die("<p>Query fallita!".$conn->error."</p>");
            // if($conn->error){
            //     die($conn->error);
            // }
            if($ris->num_rows>0){
                while($row = $ris->fetch_assoc()){
                    echo '<div class="item">'.$row['titolo'].'</div>';
                }
            }
            
        ?>
    </div>
</body>

</html>