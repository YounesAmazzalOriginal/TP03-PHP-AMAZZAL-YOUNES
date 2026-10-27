<?php
    session_start();
    $_SESSION["login"] = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        
        if ($username != "" && $password != "") {
            $_SESSION["login"] = 1;
        }

        header("Location: profil.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username" require>
        <br>
        <input type="password" name="password" placeholder="password" require>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
    <br>
    <u><i>"si on entrer a page profil sans connecté, on va derigé vers la page login"</i></u>
</body>
</html>