<?php
    $prenom = $_GET["prenom"];
    $nom = $_GET["nom"];
    $sexe = $_GET["sexe"];

    if ($sexe == "m") {
        echo "Bonjour monsieur $prenom $nom";
    }
    else {
        echo "Bonjour madame $prenom $nom";
    }

    echo "<br>le url apres l'envoi : http://localhost/tp_php/info.php?<b>prenom=younes</b>&<b>nom=amazzal</b>&<b>sexe=m</b>";

?>