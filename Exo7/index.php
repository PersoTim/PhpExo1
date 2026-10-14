<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user.php" method="get">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">
        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <button type="submit">Envoyer</button>
    </form>

    <form action="user.php" method="post">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">
        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <button type="submit">Envoyer</button>
    </form>
    <br>



    <?php 
        if (isset($_POST['civilite']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['fichier'])) {
            echo "Bonjour {$_POST['civilite']} {$_POST['prenom']} {$_POST['nom']} ";
            echo $_POST['fichier'];
        } else {
        ?>
        
            <form action="index.php" method="post">
                <label for="civilite">Civilité</label>
                <select id="civilite" name="civilite">
                    <option value="monsieur">Mr.</option>
                    <option value="madame">Mme.</option>
                </select>

                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom">

                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">

                <label for="fichier">Fichier</label>
                <input type="file" name="fichier" id="fichier" accept=".pdf">


                <button type="submit">Envoyer</button>
            </form>
        <?php
        }
    ?>
</body>
</html>