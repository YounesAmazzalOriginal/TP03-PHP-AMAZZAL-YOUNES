<?php
    echo "<h1>Exercice 5.4</h1>";
    echo "<h3>Question 1</h3>";

    $resultats = [
        "Younes" => [
            "notes" => [20, 15],
            "moyenne" => 17.5
        ],
        "Sara" => [
            "notes" => [17, 18],
            "moyenne" => 17.5
        ],
        "Amine" => [
            "notes" => [14, 16],
            "moyenne" => 15
        ]
    ];

    echo "<pre>";
    print_r($resultats);
    echo "</pre>";

    echo "<h3>Question 2</h3>";
    $json = json_encode($resultats, JSON_PRETTY_PRINT);
    file_put_contents("data/notes.json", $json);


    echo "<h3>Question 3</h3>";
    $json = file_get_contents("data/notes.json");

    $resultats = json_decode($json, true);

    echo "<pre>";
    print_r($resultats);
    echo "</pre>";


    echo "<h3>Question 4</h3>";
    echo "Résultat de serialize() :<br>";
    echo serialize($resultats);

    echo "<br><br>Résultat de json_encode() :<br>";
    echo json_encode($resultats, JSON_PRETTY_PRINT);
?>