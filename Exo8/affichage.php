<?php
    session_start();

    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['age'])) {
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['age'] = $_POST['age'];
        
        echo "{$_SESSION['firstName']} {$_SESSION['lastName']} {$_SESSION['age']}";
    }

    if (isset($_POST['email']) && isset($_POST['password'])) {
        setcookie('email', $_POST['email'], time() + 3600);
        setcookie('password', $_POST['password'], time() +3600);
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage</title>
</head>
<body>
    <h2>Email</h2>

    <?php
    if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
        echo "{$_COOKIE['email']} {$_COOKIE['password']}";
    }
    ?>

</body>
</html>