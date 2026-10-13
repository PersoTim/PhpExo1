<?php
    $age = 17;

    if ($age >= 18) {
        echo "Vous êtes majeur <br>";
        $majeur = true;
    } else {
        echo "Vous êtes mineur <br>";
        $majeur = false;
    }

    $isEasy = true;

    if ($isEasy === true) {
        echo "C'est facile ! <br>";
    } else {
        echo "C'est difficile ! <br>";
    }

    $gender = "Homme";

    if ($gender === "Homme") {
        if ($majeur === true) {
            echo "Vous êtes un homme et vous êtes majeur <br>";
        } else {
            echo "Vous êtes un homme et vous êtes mineur <br>";
        }
    } elseif ($gender === "Femme") {
        if ($majeur === true) {
            echo "Vous êtes une femme et vous êtes majeur <br>";
        } else {
            echo "Vous êtes une femme et vous êtes mineur <br>";
        }
    }

    $richter = 2;

    switch ($richter) {
        case 1:
            echo "Micro-séisme impossible à ressentir. <br>";
            break;
        case 2:
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. <br>";
            break;
        case 3:
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. <br>";
            break;
        case 4:
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. <br>";
            break;
        case 5:
            echo "Séisme capable d engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. <br>";
            break;
        case 6:
            echo "Fort séisme capable d engendrer des destructions majeures sur une large distance (180 km) autour de l épicentre. ";
            break;
        case 7:
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. <br>";
            break;
        case 8:
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. <br>";
            break;
        case 9:
            echo "Séisme capable de tout détruire sur une très vaste zone. <br>";
            break;
        default:
            break;
    }

    if ($gender !== "Homme") {
        echo "C'est une developpeuse <br>";
    } else {
        echo "C'est un developpeur <br>";
    }

    if ($age >= 18) {
        "Tu es majeur ! <br>";
    } else {
        echo "Tu es mineur <br>";
    }

    $isOk = false;
    if ($isOk === false) {
        "C'est pas bon <br>";
    } else {
        echo "C'est ok ! <br>";
    }

    if ($isOk) {
        echo "C'est ok !! <br>";
    } else {
        echo "C'est pas bon ! <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>