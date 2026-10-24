<?php
    echo "<h1>Exercice 4.3</h1>";
    echo "<h3>Question 2</h3>";

    include "config.php";

    $nom = $_POST["nom"];
    $note_info = $_POST["note_info"];
    $note_math = $_POST["note_math"];

    echo "<br>champe 1 isset :".isset($nom);
    echo "<br>champe 2 isset :".isset($note_info);
    echo "<br>champe 3 isset :".isset($note_math);

    echo "<br>champe 1 empty :".empty($nom);
    echo "<br>champe 2 empty :".empty($note_info);
    echo "<br>champe 3 empty :".empty($note_math);

    function entrerInterval($note) {
        if ($note <= defined("NOTE_MIN") && $note <= defined("NOTE_MAX")) {
            return "oui";
        }
        return "non";
    }

    echo "<br><br>verifier si les note entre NOTE_MIN et NOTE_MAX";
    echo "<br>note_info : ".entrerInterval($note_info);
    echo "<br>note_math : ".entrerInterval($note_math);

    echo "<br><br>la protection d'affichage:";
    echo "<br>du nom : ". htmlspecialchars($nom);
    echo "<br>du note_info : ". htmlspecialchars($note_info);
    echo "<br>du note_math :". htmlspecialchars($note_math);


    echo "<h3>Question 3</h3>";
    echo "<br>On préférer le Post a Get car il protége les information, il n'affiche pas a lien url";
    
    echo '<br>$_REQUEST : regroupe les données de GET, POST et éventuellement COOKIE.';


    echo "<h1>Exercice 5.1</h1>";
    
    $f = fopen("data/notes.csv", "a");
    fputcsv($f, [$nom, $note_info, $note_math]);
    fclose($f);
?>