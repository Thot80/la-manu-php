<?php
session_start();
$_SESSION["lastname"] = "Doe";
$_SESSION["firstname"] = "John";
$_SESSION["age"] = 33;

if(isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["password"]) && !empty($_POST["password"])){
    setcookie("login", $_POST["login"]);
    setcookie("password", $_POST["password"]);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP - Les Super Globales</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Super Globales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
                <ul>
                    <li>son User Agent</li>
                    <li>son adresse ip</li>
                    <li>le nom du serveur</li>
                </ul>
            </div>
            <div class="col-xl-6">
                <pre><code>
               $_SERVER["HTTP_USER_AGENT"]
               $_SERVER['REMOTE_ADDR']
               $_SERVER['SERVER_NAME']
                </code></pre>
            </div>
            <div class="col-xl-2">
               <p>Le User Agent du navigateur est :<?= $_SERVER["HTTP_USER_AGENT"] ?></p>
               <p>L'adresse IP de l'utilisateur est : <?=$_SERVER['REMOTE_ADDR']?></p>
               <p>Le nom du serveur est : <?=$_SERVER['SERVER_NAME']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
                Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                session_start();
                $_SESSION["lastname"] = "Doe";
                $_SESSION["firstname"] = "John";
                $_SESSION["age"] = 33;

                // sur l'autre page

                session_start();
                 $_SESSION["firstname"];
                 $_SESSION["lastname"];
                $_SESSION["age"];
                </code></pre>
            </div>
            <div class="col-xl-2">
                <a href="session.php">Voir les données</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
            <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.
            </p> 
            </div>
            <div class="col-xl-4">
                <form action="superglobales.php" method="POST">
                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Attention aux regards indiscrets !</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" >Password</label>
                        <input type="password" class="form-control" id="password"name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-xl-4">
                <pre><code>
                if(isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["password"]) && !empty($_POST["password"])){
                    setcookie("login", $_POST["login"]);
                    setcookie("password", $_POST["password"]);
                }
                </code></pre>
                <?php
                if(isset($_COOKIE["login"]) && !empty($_COOKIE["login"]) && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])){
                
                ?>
                <p>Login : <?= $_COOKIE["login"]; ?></p>
                <p>Password : <?= $_COOKIE["password"]; ?> </p>
                <?php
                }else {
                ?>
                <p>Pas de cookies enregistés</p>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
               <p>
               Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
               </p> 
            </div>
            <div class="col-xl-6">
                <pre><code>
                if(isset($_COOKIE["login"]) && !empty($_COOKIE["login"]) && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])){
                    echo "<p>".$_COOKIE["login"]."</p>";
                    echo "<p>".$_COOKIE["password"]."</p>";

                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <a href="session.php">Voir les données</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
                </p>
                <p><a href="session.php">Modifier les cookies</a></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                if(isset($_COOKIE["login"]) && !empty($_COOKIE["login"]) && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])){
                echo "<p> Login : ".$_COOKIE["login"]."</p>";
                echo "<p> Password :".$_COOKIE["password"]."</p>";
                }else {
                    echo "<p> Login : Inconnu</p>";
                    echo "<p> Password : Inconnu</p>";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                
                <p>
                    Void
                </p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>