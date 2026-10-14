<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
            if (isset($_GET['nom']) || isset($_GET['prenom'])) {
                echo "{$_GET['prenom']} ";
                echo "{$_GET['nom']} ";
            }
        ?>
    </p>

    <p>
        <?php 
            if (isset($_POST['nom']) || isset($_POST['prenom'])) {
                echo ($_POST['prenom']) . " ";
                echo ($_POST['nom']);
            }
        ?>
    </p>
</body>
</html>