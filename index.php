<?php
require('./data/credenziali.php');
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
    <link rel="stylesheet" href="style/style.css">
    <title>Index</title>
</head>

<body class="gray_bg">
    <!-- <form action="risposta.php" method="get">
        Email:<input type="email" name="email">
        Password:<input type="password" name="password">
        <input class="submit" type="submit" value="Login">
    </form> -->
    <div class="login_bg">
        <div class="login_container">
            <h1>Login</h1>
            <form action="risposta.php" method="post">
                <div class="input_wrapper">
                    <h2>Email:</h2>
                    <span><input type="email" name="email"></span>
                </div>
                <div class="input_wrapper">
                    <h2>Password:</h2>
                    <span><input type="password" name="password"></span>
                </div>

                <br>
                <br>
                <input class="submit" type="submit" value="Login">
            </form>
        </div>
    </div>



</body>

</html>