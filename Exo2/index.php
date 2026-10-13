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
            echo "Vous êtes un homme et vous êtes majeur";
        } else {
            echo "Vous êtes un homme et vous êtes mineur";
        }
    } elseif ($gender === "Femme") {
        if ($majeur === true) {
            echo "Vous êtes une femme et vous êtes majeur";
        } else {
            echo "Vous êtes une femme et vous êtes mineur";
        }
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