<?php


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réception des données</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Données reçues</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <h2>Reçus par GET</h2>
                <p>
                    Nom : <?= $_GET["lastnameGet"] ??= "Champs manquant";?>
                </p>
                <p>
                    Nom : <?= $_GET["firstnameGet"] ??= "Champs manquant";?>
                </p>
            </div>
            <div class="col-xl-4">
            <h2>Reçus par POST</h2>
                <p>
                    Nom : <?= $_POST["lastnamePost"] ??= "Champs manquant";?>
                </p>
                <p>
                    Nom : <?= $_POST["firstnamePost"] ??= "Champs manquant";?>
                </p>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</body>
</html>