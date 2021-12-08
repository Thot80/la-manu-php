<?php
    // Exercice 1
    $lastname = "Kessous";
    $firstname = "Jérémy";
    $age = 33;

    // Exercice 3
    $maChaine = "Hello Worl !";
    $monInt = 35;
    $monFloat = 3.33;
    $monBoolean = true;

    // Exercice 5
    $sum = 3+4;
    $multiple = 5*20;
    $divide = 45/5;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP - Les variables</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Variables</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer trois variables <b>lastname</b> , <b>firstname</b> et <b>age</b>  et les initialiser avec les valeurs de votre choix. <b>Attention</b> age est de type entier.  Afficher leur contenu.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $lastname = "Kessous";
                $firstname = "Jérémy";
                $age = 33;

                echo ("Mon nom est " . $firstname. " " . $lastname.", j'ai ".$age." ans.");
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php 
                    echo ("Mon nom est " . $firstname. " " . $lastname.", j'ai ".$age." ans.");
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer une variable <b>km</b>. L'initialiser à 1. Afficher son contenu.  
                Changer sa valeur par 3. Afficher son contenu.  
                Changer sa valeur par 125. Afficher son contenu. </p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $km =1;
                echo "km = ".$km;

                $km = 3;
                echo "<br>";
                echo "km = ".$km;

                $km = 125;
                echo "<br>";
                echo "km = ".$km;
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $km =1;
                    echo "km = ".$km;
    
                    $km = 3;
                    echo "<br>";
                    echo "km = ".$km;
    
                    $km = 125;
                    echo "<br>";
                    echo "km = ".$km;
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
                <p>
                Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.  
                Les afficher.</p>        
            </div>
            <div class="col-xl-6">
                <pre><code>
                    $maChaine = "Hello Worl !";
                    $monInt = 35;
                    $monFloat = 3.33;
                    $monBoolean = true;

                    echo "String : ".$maChaine."<br>";
                    echo "Entier : ".$monInt."<br>";
                    echo "Float : ".$monFloat."<br>";
                    echo "Bool : ".$monBoolean."<br>";
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    echo "String : ".$maChaine."<br>";
                    echo "Entier : ".$monInt."<br>";
                    echo "Float : ".$monFloat."<br>";
                    echo "Bool : ".$monBoolean."<br>";
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
               <p>
               Créer trois variables <b>lastname</b>, <b>firstname</b> et <b>age</b> et les initialiser avec les valeurs de votre choix. <b>Attention</b> age est de type entier. </p>
               <p>Afficher : "Bonjour" + <b>lastname</b> + <b>firstname</b> + ",tu as" + <b>age</b> + "ans".</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                lastname = "Kessous";
                $firstname = "Jérémy";
                $age = 33;

                echo ("Bonjour " . $lastname. " ". $firstname. ", tu as ".$age." ans.");
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    echo ("Bonjour " . $lastname. " ". $firstname. ", tu as ".$age." ans.");
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer 3 variables. Dans la première mettre le résultat de l'opération <b>3 + 4</b>.</p>
                <p>Dans la deuxième mettre le résultat de l'opération <b>5 * 20</b>.</p>
                <p>Dans la troisième mettre le résultat de l'opération <b>45 / 5</b>.</p>
                <p>Afficher le contenu des variables.
                </p>    
            </div>
            <div class="col-xl-6">
                <pre><code>
                $sum = 3+4;
                $multiple = 5*20;
                $divide = 45/5;

                echo "Somme de 3 et 4 : ".$sum;
                echo("<br>");

                echo "Multiplication de 5 par 20 : ".$multiple;
                echo("<br>");

                echo "Division de 45 par 5 : ".$divide;
                echo("<br>");
                </code></pre>
            </div>
            <div class="col-xl-2">
                <?php
                echo "Somme de 3 et 4 : ".$sum;
                echo("<br>");
                
                echo "Multiplication de 5 par 20 : ".$multiple;
                echo("<br>");
                
                echo "Division de 45 par 5 : ".$divide;
                echo("<br>");
                ?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>