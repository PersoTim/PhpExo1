<?php
    $string = file_get_contents("dico.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("\n", $string);

    $mots = count($dico);
    echo "Il y a $mots mots dans ce dico";
    array_map('strlen', $dico);
?>