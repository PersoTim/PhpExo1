<?php
$name = 'Timoute';

$lastName = 'Granger';
$firstName = 'Timothée';
$age = 17;

$km = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Salut <?php echo $name; ?></h1>
    <p>
        <?php
            echo "Ou devrai-je dire {$lastName} {$firstName}, {$age} ans.";
        ?>
    </p>

    <p>
        <?php
            echo 'Tu as fais '. $km . ' km ce matin. <br>';

            $km = 3;
            echo 'Ah non en fait ' . $km . '.<br>';

            $km = 125;
            echo 'Toujours pas ... ' . $km . ' km.';
        ?>
    </p>
</body>
</html>