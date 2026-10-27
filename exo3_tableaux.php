<?php
    require_once "config.php";

    include "includes/entete_inc.php";
    include "includes/menu_inc.php";


    /*
    // =========== Exercice 3.2 ===========
    echo "<h1>Exercice 3.2</h1>";

    $notes = [
        "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
        "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
        "Hamza" => 7, "Sami" => 7, "Noura" => 14
    ];
    $modules = ["module 1", "module 2", "module 3"];

    function mention($SEUIL) {
        if ($SEUIL >= 16) {
            return "Très bien"; 
        }
        elseif ($SEUIL >= 14) {
            return "Bien";
        }
        elseif ($SEUIL > 12) {
            return "Assez bien";
        }
        elseif ($SEUIL >= 10) {
            return "Pasable";
        }
        else {
            return "Ajourné";
        }
    }

    
    echo "<table border='1'><tr><th>Nom</th><th>Note</th><th>Mention</th><tr>";
    foreach ($notes as $key => $value) {
        $mention = mention($value);
        
        if ($value < 10) {
            echo "<tr border='1' ><td>$key</td><td>$value</td><td><span style='color:red;'>$mention</span></td></tr>";
        }
        else {
            echo "<tr border='1'><td>$key</td><td>$value</td><td><span>$mention</span></td></tr>";
        }
    }
    echo "</table>";

    echo "<h1>Exercice 3.3</h1>";
    echo "<h3>Question 1</h3>";
    echo "<p>(voir le script)</p>";
    
    function my_array_sum($l) {
        $somme = 0;

        foreach ($l as $key => $value) {
            $somme += $value;
        }

        return $somme;
    }
    function my_max($l) {
        $max = 0;

        foreach ($l as $key => $value) {
            if ($value > $max) {
                $max = $value;
            }
        }

        return $max;
    }
    function my_min($l) {
        $min = 20;

        foreach ($l as $key => $value) {
            if ($value < $min) {
                $min = $value;
            }
        }

        return $min;
    }

    echo "<h3>Question 2</h3>";
    echo "La somme sans utiliser array_sum(): ".my_array_sum($notes);
    echo "<br>La moyenne : ".round(my_array_sum($notes)/count($notes), 2);
    echo "<br>Meuilleur etudient :".my_max($notes);
    echo "<br>Mauvais etudient :".my_min($notes);

    echo "<br><br>Verifier avec les foncrion du php :";
    echo "<br>La somme : ".array_sum($notes);
    echo "<br>La moyenne : ".round(array_sum($notes)/count($notes), 2);
    echo "<br>Meuilleur etudient :".max($notes);
    echo "<br>Mauvais etudient :".min($notes);


    echo "<h3>Question 3</h3>";
    // 

    */

    echo "<h1>Exercice 3.4</h1>";
    echo "<h3>Question 1</h3>";
    $notes = [
        "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
        "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
        "Hamza" => 7, "Sami" => 7, "Noura" => 14
    ];

    function afficheListe($l) {
        foreach ($l as $key => $value) {
            echo "$key => $value\t\t\t";
        }
    }

    ksort($notes); 
    echo "<br>le tableau trié par noms croissants (ksort)<br>".afficheListe($notes)."<br>";
    arsort($notes);
    echo "<br>le tableau trié par notes décroissantes (arsort)<br>".afficheListe($notes)."<br>";
    krsort($notes);
    echo "<br>le tableau trié par noms décroissants (krsort)<br>".afficheListe($notes)."<br>";
    asort($notes);
    echo "<br>le tableau trié par notes croissantes (asort)<br>".afficheListe($notes)."<br>";


    echo "<h1>Exercice 3.5</h1>";
    $a = ["x" => 1, "y" => 2];
    $b = ["y" => 2, "x" => 1];
    echo '$a = ["x" => 1, "y" => 2] et $b = ["y" => 2, "x" => 1]';
    echo '<br>$a + $b il va afficher : Warning';
    echo '<br>$a == $b il va afficher : 1';
    echo '<br>$a === $b il va afficher : rien';


    include "includes/pied_inc.php";
?>