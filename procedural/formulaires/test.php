<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <title>PHP - Les Formulaires</title>
</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-12">
                <p>FAu formulaire de l'exercice 3, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 4, le nom et l'extension du fichier.</p>
            </div>
            <div class="col-xl-4">
            <?php

            if ((isset($_POST["lastnameFile"]) && (!empty($_POST["lastnameFile"]))) && (isset($_POST["firstnameFile"]) && (!empty($_POST["firstnameFile"]))) && (isset($_POST["civilityFile"]) && (!empty($_POST["civilityFile"]))) && (isset($_FILES["uploadFile"]) && (!empty($_POST["uploadFile"])))){
                var_dump($_FILES);
                var_dump($_POST);
            }
            else {
            ?>
             <form action="test.php" method="POST" enctype = "multipart/form-data">
                    <div class="form-group" >
                        <label for="lastnameFile">Nom</label>
                        <input type="text" class="form-control" id="lastnameFile" placeholder="Doe" name="lastnameFile">
                    </div>
                    <div class="form-group">
                        <label for="firstnameFile">Prénom</label>
                        <input type="text" class="form-control" id="firstnameFile" placeholder="John" name="firstnameFile">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="civilityFile">Civilité</label>
                        <select id="civilityFile" class="form-control" name="civilityFile">
                            <option selected>Mr</option>
                            <option>Mme</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="uploadFile">Example file input</label>
                        <input type="file" class="form-control-file" name="uploadFile">
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Envoyer</button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>