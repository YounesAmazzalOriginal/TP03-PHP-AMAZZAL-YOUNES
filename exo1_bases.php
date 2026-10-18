<?php
    // =========== Exercice 1.2 ===========
    echo "<h1>Exercice 1.2</h1>";
    echo 'Hello PHP';
    echo "<br>";
    // commantaire 1
    /* commantaire 2 */
    #commantaire 3

    // variable valide : $x, $_x, $état
    // variable invalide : $2x, $x-y, $Prix_HT, $prix ht

    require "config.php";

    echo defined('SEUIL');
    echo defined('INCONNUE');
    // define c'est une fonction cree const, prendre 2 parametre: la valeur et le nom

    // l'affichage d'une constant declaré par const géneré erreur : Fatal error: Uncaught Error: Undefined constant "DD" in C:\xampp\htdocs\tp_php\exo1_bases.php:16 Stack trace: #0 {main} thrown in C:\xampp\htdocs\tp_php\exo1_bases.php on line 16
    // l'affichage d'une constant declaré par define n'affiche rien

    
    // =========== Exercice 1.3 ===========
    echo "<h1>Exercice 1.3</h1>";
    $prix_ht = 60;
    $tva = 20;

    $prix_produit = $prix_ht * (1 + $tva /100);

    echo "Le prix TTC du produit est de $prix_produit €";


    echo "La variable declare en tant que int, mais on a fait une cast pas (string)var<br><br>  ";
    echo "<h3>Question 1</h3>";
    
    $test = 42;
    $test = (string)$test;
    echo "<br>".var_dump($test);
    
    echo "<h3>Question 2</h3>";
    echo "variable => true car string pas vide : ".var_dump((bool) $test). "<br>";
    echo "0 => true car string pas vide ou 0 : ".var_dump((bool) 0). "<br>";
    echo "'0' => false car string a valeur 0  : ".var_dump((bool) "0"). "<br>";
    echo "'' => false car string vide  : ".var_dump((bool) ""). "<br>";
    echo "abc => true car string pas vide ou 0  : ".var_dump((bool) "abc"). "<br>";
    echo "[] => false car array vide  : ".var_dump((bool) []). "<br>";
    
    // =========== Exercice 1.4 ===========
    echo "<h1>Exercice 1.4</h1>";
    echo "<h3>Question 3</h3>";
    echo "(int) 3.9 : ".(int) 3.9;
    echo "<br>(int) '12abc' : ".(int) '12abc';
    echo "<br>(float) '1.5e3' : ".(float) '1.5e3';
    echo "<br>(int)true : ".(int)true;

    echo "<h3>Question 4</h3>";
    $nbr = 255;
    echo "Decimal : ".$nbr;
    echo "<br>Hexadecimal : ".hexDec($nbr);
    echo "<br>Octal : ".octdec($nbr);
    echo "<br>Binaire : ".decbin($nbr);


    // =========== Exercice 1.5 ===========
    echo "<h1>Exercice 1.5</h1>";
    echo "<h3>Question 1</h3>";
    $traitees = "égales à";
    $ici = 2;

    echo "Ahmed a dit : \"J'ai réussi\"<br>";
    echo "Voulez-vous supprimer C:\*.*?<br>";
    echo "Ceci n'affichera pas \\n de nouvelle ligne<br>";
    echo "Les variables ne seront pas \$traitees \$ici<br>";
    echo "Les variables seront égales à $ici<br>";
    echo "Retire les * : ". trim("*Bonjour les développeurs*", "*");

?>