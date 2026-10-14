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
            echo "{$_GET['firstName']} ";
            echo "{$_GET['lastName']}";
        ?>
    </p>
    <p>
        <?php
            if (!isset($_GET['age'])) {
                echo "Il faut renseigner un age";
            }
        ?>  
    </p>

    <p>
        <?php
            if (!isset($_GET['startDate']) || !isset($_GET['endDate'])) {
                echo "Il faut mettre une Date";
            } else {
                echo "{$_GET['startDate']} ";
                echo "{$_GET['endDate']} ";
            }
        ?>
    </p>

    <p>
        <?php 
            if (!isset($_GET['language']) || !isset($_GET['server'])) {
                echo "Renseigne tout les valeurs";
            } else {
                echo "{$_GET['language']} ";
                echo "{$_GET['server']} ";
            }
        ?>
    </p>

    <p>
        <?php 
            if (!isset($_GET['week'])) {
                echo "renseigne une semaine";
            } else {
                echo "{$_GET['week']}";
            }
        ?>
    </p>

    <p>
        <?php 
            if (!isset($_GET['building']) || !isset($_GET['room'])) {
                echo "Renseigne tout les valeurs";
            } else {
                echo "{$_GET['building']} ";
                echo "{$_GET['room']} ";
            }
        ?>
    </p>
</body>
</html>