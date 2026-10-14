<?php

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
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $_COOKIE['email']; ?>">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" value="<?= $_COOKIE['password']; ?>">

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>