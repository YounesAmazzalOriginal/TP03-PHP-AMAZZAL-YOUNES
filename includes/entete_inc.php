<?php
    include "../config.php";
    
    echo "<h1>Exercice 4.1</h1>";
    
    echo "<h3>Question 3</h3>";
    echo "Si on include fichier n'exist pas, il vas généré l'erreur : <b>Si on include fichier n'exist pas, il vas généré l'erreur : Si on require fichier n'exist pas, il vas généré l'erreur : Fatal error: Uncaught Error: Failed opening required 'inexist' (include_path='C: mpp/php/PEAR') in C: mpp/htdocs p_php/includesntete_inc.php:4 Stack trace: #0 {main} thrown in C: mpp/htdocs p_php/includesntete_inc.php on line 4Faculté science semlalia marrakech</b>";
    echo "<br><br>Si on require fichier n'exist pas, il vas généré l'erreur : <b>Fatal error: Uncaught Error: Failed opening required 'inexist' (include_path='C:/xampp/php/PEAR') in C:/xampp/htdocs/tp_php/includes/entete_inc.php:4 Stack trace: #0 {main} thrown in C:/xampp/htdocs/tp_php/includes/entete_inc.php on line 4</b>";


    echo "<h3>Question 4</h3>";
    echo "Si on include menu_inc.php deux fois, ilva copy le contenu de menu_inc deux fois<br>";
    echo "Si on include_once menu_inc.php deux fois, ilva copy le contenu de menu_inc une seul fois";
?>