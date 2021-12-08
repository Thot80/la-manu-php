<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css"
        integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <title>PHP - Les Formulaires</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Formulaires</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php
                    avec la méthode GET. Afficher dans la page user.php les données du formulaire transmis.</p>

            </div>
            <div class="col-xl-4">
                <form action="user.php" method="GET">
                    <div class="form-group">
                        <label for="lastnameGet">Nom</label>
                        <input type="text" class="form-control" id="lastnameGet" placeholder="Doe" name="lastnameGet">
                    </div>
                    <div class="form-group">
                        <label for="firstnameGet">Prénom</label>
                        <input type="text" class="form-control" id="firstnameGet" placeholder="John"
                            name="firstnameGet">
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Envoyer</button>
                </form>
            </div>
            <div class="col-xl-4">
                <pre><code>
                echo $_GET["lastnameGet"] ??= "Champs manquant";
                echo $_GET["firstnameGet"] ??= "Champs manquant";
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php
                    avec la méthode POST. Afficher dans la page user.php les données du formulaire transmises.</p>
            </div>
            <div class="col-xl-4">
                <form action="user.php" method="POST">
                    <div class="form-group">
                        <label for="lastnamePost">Nom</label>
                        <input type="text" class="form-control" id="lastnamePost" placeholder="Doe" name="lastnamePost">
                    </div>
                    <div class="form-group">
                        <label for="firstnamePost">Prénom</label>
                        <input type="text" class="form-control" id="firstnamePost" placeholder="John"
                            name="firstnamePost">
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Envoyer</button>
                </form>
            </div>
            <div class="col-xl-4">
                <pre><code>
                    $_POST["lastnamePost"] ??= "Champs manquant";
                    $_POST["firstnamePost"] ??= "Champs manquant";
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer un formulaire avec :</p>
                <ul>
                    <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
                    <li>Un champ texte pour le nom</li>
                    <li>Un champ texte pour le prénom</li>
                </ul>
                <p>Ce formulaire doit rediriger vers la page index.php.Vous avez le choix de la méthode.</p>
            </div>
            <div class="col-xl-4">
                <form action="formulaires.php" method="POST">
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Doe" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="John" name="firstname">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="civility">Civilité</label>
                        <select id="civility" class="form-control" name="civility">
                            <option selected>Mr</option>
                            <option>Mme</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Envoyer</button>
                </form>
            </div>
            <div class="col-xl-4">
                <p>Nom : <?= $_POST["lastname"] ??= "Champ manquant"; ?></p>
                <p>Prénom : <?= $_POST["firstname"] ??= "Champ manquant"; ?></p>
                <p>Civilité : <?= $_POST["civility"] ??= "Champ manquant"; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
                <p>
                    Avec le formulaire de l'exercice 3, Si des données sont passées en POST ou en GET, le formulaire ne
                    doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire,
                    c'est l'inverse.
                    Utiliser qu'une seule page.
                </p>
            </div>
            <div class="col-xl-4">
                <?php

                                    use function PHPSTORM_META\type;

                if (!isset($_POST["lastnameVanish"]) || empty($_POST["lastnameVanish"]) || !isset($_POST["firstnameVanish"]) || empty($_POST["firstnameVanish"]) || !isset($_POST["civilityVanish"]) || empty($_POST["civilityVanish"])){
                    ?>
                <form action="formulaires.php" method="POST">
                    <div class="form-group">
                        <label for="lastnameVanish">Nom</label>
                        <input type="text" class="form-control" id="lastnameVanish" placeholder="Doe"
                            name="lastnameVanish">
                    </div>
                    <div class="form-group">
                        <label for="firstnameVanish">Prénom</label>
                        <input type="text" class="form-control" id="firstnameVanish" placeholder="John"
                            name="firstnameVanish">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="civilityVanish">Civilité</label>
                        <select id="civilityVanish" class="form-control" name="civilityVanish">
                            <option selected>Mr</option>
                            <option>Mme</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Envoyer</button>
                </form>
                <?php
                    }else {
                ?>
                <p>Nom : <?= $_POST["lastnameVanish"] ??= "Champ manquant"; ?></p>
                <p>Prénom : <?= $_POST["firstnameVanish"] ??= "Champ manquant"; ?></p>
                <p>Civilité : <?= $_POST["civilityVanish"] ??= "Champ manquant"; ?></p>
                <?php
                    }
                ?>
            </div>
            <div class="col-xl-4">
                <pre><code>
                // Ouverture balise php
                if (!isset($_POST["lastnameVanish"]) ||
                 empty($_POST["lastnameVanish"]) ||
                  !isset($_POST["firstnameVanish"]) ||
                   empty($_POST["firstnameVanish"]) ||
                    !isset($_POST["civilityVanish"]) ||
                     empty($_POST["civilityVanish"])){
                // Fermeture balise PHP  
                
                // Code HTML du formulaire

                // Ouverture PHP
                
                    }else {
                // Fermeture PHP
                
                // Code HTML affichage du résultat
                // Ouverture PHP
                    }
                // Fermeture PHP
            </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Au formulaire de l'exercice 3, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est
                    demandé à l'exercice 4, le nom et l'extension du fichier.</p>
            </div>
            <div class="col-xl-4">
                <?php

            if ((isset($_POST["lastnameFile"]) && (!empty($_POST["lastnameFile"]))) && (isset($_POST["firstnameFile"]) && (!empty($_POST["firstnameFile"]))) && (isset($_POST["civilityFile"]) && (!empty($_POST["civilityFile"]))) && (isset($_FILES["uploadFile"]) && (!empty($_FILES["uploadFile"])))){
            ?>

                <p>Nom : <?= $_POST["lastnameFile"]; ?></p>
                <p>Prénom : <?= $_POST["firstnameFile"]; ?></p>
                <p>Civilité : <?= $_POST["civilityFile"]; ?></p>
                <p>Nom du fichier uploadé : <?= $_FILES["uploadFile"]["name"]; ?></p>
                <p>Extension du fichier uploadé : <?= $_FILES["uploadFile"]["type"]; ?></p>
                <?php
            }
            else {
            ?>
                <form action="formulaires.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="lastnameFile">Nom</label>
                        <input type="text" class="form-control" id="lastnameFile" placeholder="Doe" name="lastnameFile">
                    </div>
                    <div class="form-group">
                        <label for="firstnameFile">Prénom</label>
                        <input type="text" class="form-control" id="firstnameFile" placeholder="John"
                            name="firstnameFile">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="civilityFile">Civilité</label>
                        <select id="civilityFile" class="form-control" name="civilityFile">
                            <option selected>Mr</option>
                            <option>Mme</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="uploadFile">Upload</label>
                        <input type="file" class="form-control-file" name="uploadFile" id="uploadFile">
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Envoyer</button>
                </form>
                <?php
            }
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>Sur le formulaire de l'exercice 5, en plus de ce qui est demandé sur les exercices précédent,
                    vérifier que le fichier transmis est bien un fichier pdf.</p>
            </div>
            <div class="col-xl-4">
                <pre><code>
                <pre><code>
                if ((isset($_POST["lastnameFile"]) &&
                 (!empty($_POST["lastnameFile"]))) &&
                  (isset($_POST["firstnameFile"]) &&
                   (!empty($_POST["firstnameFile"]))) &&
                    (isset($_POST["civilityFile"]) && 
                    (!empty($_POST["civilityFile"]))) &&
                     (isset($_FILES["uploadFile"]) &&
                      (!empty($_FILES["uploadFile"])))){
                        $fileExtension = pathinfo($_FILES["uploadFile"]["name"], PATHINFO_EXTENSION);
                        if ($fileExtension == "pdf") {
                            echo "<p> Le fichier est bien au format pdf </p>";
                        }
                        else{
                            echo "<p> Format incorrect </p>";
                        }
                    }  
                </code></pre>
                </code></pre>
            </div>
            <div class="col-xl-4">
                <?php
                    if ((isset($_POST["lastnameFile"]) && (!empty($_POST["lastnameFile"]))) && (isset($_POST["firstnameFile"]) && (!empty($_POST["firstnameFile"]))) && (isset($_POST["civilityFile"]) && (!empty($_POST["civilityFile"]))) && (isset($_FILES["uploadFile"]) && (!empty($_FILES["uploadFile"])))){
                        $fileExtension = pathinfo($_FILES["uploadFile"]["name"], PATHINFO_EXTENSION);
                        if ($fileExtension == "pdf") {
                            echo "<p> Le fichier est bien au format pdf </p>";
                        }
                        else{
                            echo "<p> Format incorrect </p>";
                        }
                    }
               ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>