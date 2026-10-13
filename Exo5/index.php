<?php
    $month = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'décembre'];

    echo "{$month[2]} <br>";
    echo "{$month[5]} <br>";

    $month[7] = 'août';
    echo "{$month[7]} <br>";

    $departements = array(
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme'
    );

    echo "{$departements[59]} <br>";

    $departements +=  [51 => 'Reims'];

    for ($i=0; $i < count($month); $i++) { 
        echo "{$month[$i]} ";
    }

    var_dump($departements);

    foreach ($departements as $cle => $valeur) {
        echo "Le departement {$valeur} a pour code {$cle} <br>"; 
    }

?>