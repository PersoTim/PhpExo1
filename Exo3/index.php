

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
            $var = 0;

            while ($var <= 10) {
                echo $var . ' ';
                $var += 1;
            }
        ?>
    </p>

    <p>
        <?php
            $premierNombre = 0;
            $deuxiemeNombre = 56;

            while ($premierNombre <= 20) {
                $multi = $premierNombre * $deuxiemeNombre;
                echo $multi .' ';

                $premierNombre += 1;
            }
        ?>
    </p>

    <p>
        <?php
            $premierNombre = 100;
            $deuxiemeNombre = 56;

            while ($premierNombre >= 10) {
                $multi = $premierNombre * $deuxiemeNombre;
                echo $multi .' ';

                $premierNombre -= 1;
            }
        ?>
    </p>

    <p>
        <?php
            $variable = 1;
            while ($variable <= 10) {
                echo $variable . ' ';

                $variable += $variable / 2;
            }
        ?>
    </p>

    <p>
        <?php
            $a = 0;
            while ($a <= 15) {
                echo "On y arrive presque <br>";
                $a += 1;
            } 
            
            $b = 20;
            while ($b <= 0) {
                echo "C'est presque bon <br>";
                $b -= 1;
            }

            $c = 0;
            while ($c <= 100) {
                echo "On tient le bon bout <br>";
                $c += 15;
            }

            $d = 200;
            while ($d >= 100) {
                echo "Enfin !!!! <br>";
                $d -= 12;
            }
        ?>
    </p>
</body>
</html>