<?php
    echo "<h1>Exercice 5.2</h1>";

    echo "<h3>Question 1</h3>";
    echo "teste l'existance du fichier data : ".file_exists("data/notes.csv");

    echo "<h3>Question 2</h3>";
    $f = fopen("data/notes.csv", "r");
    if ($f == false) {
        echo "Erreur : impossible d'ouvrir le fichier.";
        exit;
    }
    fclose($f);

    echo "<h3>Question 3</h3>";
    $f = fopen("data/notes.csv", "r");

    $ligne = fgetcsv($f);

    while (($ligne = fgetcsv($f)) !== false) {
        echo $ligne[0] . " " . $ligne[1] . " " . $ligne[2];
        echo "<br>";
    }
    fclose($f);

    echo "<h3>Question 4</h3>";

    $f = fopen("data/notes.csv", "r");

    echo "<table border='1'>";
    echo "<tr>
            <th>Nom</th>
            <th>Info</th>
            <th>Math</th>
            <th>Moyenne</th>
            <th>Mention</th>
          </tr>";

    $ligne = fgetcsv($f);
    $somme = 0;
    $nb = 0;

    while (($ligne = fgetcsv($f)) !== false) {
        $nom = $ligne[0];
        $info = (float) $ligne[1];
        $math = (float) $ligne[2];

        $moyenne = ($info + $math) / 2;

        if ($moyenne >= 16) {
            $mention = "Très bien";
        } elseif ($moyenne >= 14) {
            $mention = "Bien";
        } elseif ($moyenne >= 12) {
            $mention = "Assez bien";
        } elseif ($moyenne >= 10) {
            $mention = "Passable";
        } else {
            $mention = "Insuffisant";
        }

        echo "<tr>";
        echo "<td>" . htmlspecialchars($nom) . "</td>";
        echo "<td>" . $info . "</td>";
        echo "<td>" . $math . "</td>";
        echo "<td>" . number_format($moyenne, 2) . "</td>";
        echo "<td>" . $mention . "</td>";
        echo "</tr>";

        $somme += $moyenne;
        $nb++;
    }

    echo "</table>";
    fclose($f);

    echo "<h3>Question 5</h3>";

    if ($nb > 0) {
        $moyenneGenerale = $somme / $nb;
        echo "Moyenne générale de la classe : "
            . number_format($moyenneGenerale, 2) . "/20";
    } else {
        echo "Aucun étudiant trouvé.";
    }

?>