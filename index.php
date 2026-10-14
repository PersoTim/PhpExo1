<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= date("d/m/Y"); ?></p>
    <p><?= date("d-m-y"); ?></p>
    <p><?= date('l jS F Y'). "\n"; ?></p>
    <p><?= time(); ?></p>
    <p><?= strtotime("2016-08-02 15:00:00 UTC"); ?></p>
</body>
</html>