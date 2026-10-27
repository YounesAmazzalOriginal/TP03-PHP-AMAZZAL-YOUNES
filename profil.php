<?php
    session_start();
    $login = $_SESSION["login"];
    $username = $_SESSION["username"];


    if (!$login) {
        header("Location: login.php");
    }
    else {
        echo "Bienvenue <b>$username</b><br><br>";
        echo "<button>deconnecter</button>";
    }
?>