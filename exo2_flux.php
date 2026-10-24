<?php
    // require "config.php";
    include "config.php";

    // =========== Exercice 2.2 ===========
    echo "<h1>Exercice 2.2</h1>";
    echo "<h3>Question 1</h3>";

    function mention($SEUIL) {
        if ($SEUIL >= 16) {
            echo "Très bien"; 
        }
        else if ($SEUIL >= 14) {
            echo "Bien";
        }
        else if ($SEUIL > 12) {
            echo "Assez bien";
        }
        else if ($SEUIL > 10) {
            echo "Pasable";
        }
        else {
            echo "Ajourné";
        }
    }
    echo "La note ".SEUIL." : ";
    mention(SEUIL);


    echo "<h3>Question 2</h3>";
    $mois = date("m");
    
    switch ($mois) {
        case 1:
            echo 'Janvier';
            break;
        case 2:
            echo 'Février';
            break;
        case 3:
            echo 'Mars';
            break;
        case 4:
            echo 'Avril';
            break;
        case 5:
            echo 'Mai';
            break;
        case 6:
            echo 'Juin';
            break;
        case 7:
            echo 'Juillet';
            break;
        case 8:
            echo 'Août';
            break;
        case 9:
            echo 'Septembre';
            break;
        case 10:
            echo 'Octobre';
            break;
        case 11:
            echo 'Novembre';
            break;
        case 12:
            echo 'Décembre';
            break;
        default:
            echo 'Mois invalide';
            break;
    }
            
    echo "<p>si on obliez break, il va parcourir tout les case</p>";

    
    echo "<h1>Exercice 2.3</h1>";
    echo "<h3>Question 1</h3>";
    
    for ($i=1; $i<=7; $i++) {
        for ($j=1; $j<$i; $j++) {
            echo "*";
        }
        echo "<br><br>";
    }


    echo "<h3>Question 2</h3>";
    $a = 0;
    while ($a <= 20) {
        if ($a != 10) {
            echo "$a ";
        }
        else {
            echo "<b>$a </b>";
        }
        
        $a += 2;
    }

    echo "<h3>Question 3</h3>";
    for ($i=0; $i<=10; $i++) {
        if ($i % 2 == 1) continue;

        echo "$i ";
    }

    echo "<h3>Question 4</h3>";
    $i = 1;
    while (true) {
        switch ($i) {
            case 5:
                echo "On 5<br>";
                break;

            case 10:
                echo "On 10; break<br>";
                break 2;
        }

        $i++;
    }


    echo "<h3>Question 5</h3>";
    $i = 1;
    do {
        switch ($i) {
            case 5:
                echo "At 5<br>";
                break;

            case 10:
                echo "At 10; quitting<br>";
                break 2;
        }

        $i++;
    } while (true);
?>