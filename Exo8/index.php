<?php session_start(); 
    echo "{$_SERVER['HTTP_USER_AGENT']} ";
    echo "{$_SERVER['REMOTE_ADDR']} ";
    echo "{$_SERVER['SERVER_NAME']}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="affichage.php" method="post">
        <label for="firstName">Prenom</label>
        <input type="text" name="firstName">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName">
        <label for="age">Age</label>
        <input type="number" name="age" id="age">

        <button type="submit">Envoyer</button>
    </form>

    <form action="affichage.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe</label>$
        <input type="password" name="password" id="password">

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>