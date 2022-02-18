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
    <title>login</title>
</head>
<body>
<div class="login_bg">
        <div class="login_container">
            <h1>Login</h1>
            <form action="../index.php" method="post">

                <h2>Email:</h2>
                <span><input type="email" name="email" required="true"></span>
                <h2>Password:</h2>
                <span><input type="password" name="password" required="true"></span>

                <input class="submit" type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>