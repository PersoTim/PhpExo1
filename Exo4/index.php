<?php
    function true(){
        return true;
    }

    echo true();

    function chaineChar($chaine){
        return $chaine;
    }

    echo chaineChar("Salut comment ca va ? <br>");

    function deuxChaine($chaine1, $chaine2){
        return "{$chaine1} {$chaine2}";
    }

    echo deuxChaine("Salut comment ca va ?", "Ca va et toi ? <br>");

    function deuxNombres($nombre1, $nombre2){
        if ($nombre1 > $nombre2) {
            return "Le premier nombre est plus grand <br>";
        } elseif ($nombre1 < $nombre2) {
            return "Le premier nombre est plus petit <br>";
        } else {
            return "Les deux nombres sont identiques <br>";
        }
    }

    echo deuxNombres(5, 5);

    function nombreTexte($nombre, $texte){
        return "{$texte} x{$nombre} <br>";
    }

    echo nombreTexte(2, "salut");

    function salut($nom, $prenom, $age){
        return "Bonjour {$nom} {$prenom}, tu as {$age} ans. <br>";
    }

    echo salut("Granger", "Timothée", 17);

    function genderAge($gender, $age){
        if ($gender === "Homme") {
            if ($age >= 18) {
                return "Vous êtes un homme et vous êtes majeur <br>";
            } else {
                return "Vous êtes un homme et vous êtes mineur <br>";
            }
        } elseif ($gender === "Femme") {
            if ($age >= 18) {
                return "Vous êtes une femme et vous êtes majeur <br>";
            } else {
                return "Vous êtes une femme et vous êtes mineur <br>";
            }
        }
    }

    echo genderAge("Femme", 62);

    function somme($nombre1 = 8, $nombre2 = 10, $nombre3 = 3){
        return $nombre1 + $nombre2 + $nombre3;
    }

    echo somme(1, 2, 1)
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