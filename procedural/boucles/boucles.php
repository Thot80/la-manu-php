<?php
  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP - Les boucles</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Boucles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer une variable et l'initialiser à 0.</p>
                <p>Tant que cette variable n'atteint pas 10, il faut :</p>
                <ul>
                    <li>l'afficher</li>
                    <li>l'incrementer</li>
                </ul>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $counter = 0;
                while ($counter < 10) {
                    echo "La variable counter vaut : ".$counter."&lt;br&gt;";
                    $counter++;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                <?php
                $counter = 0;
                while ($counter < 10) {
                    echo "La variable counter vaut : ".$counter."<br>";
                    $counter++;
                }
                ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
                Tant que la première variable n'est pas supérieure à 20 :</p>
                <ul>
                    <li>multiplier la première variable avec la deuxième
                    </li>
                    <li>afficher le résultat</li>
                    <li>incrementer la première variable</li>
                </ul>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $init = 0;
                $initRandom = rand(1, 100);
                while ($init < 20) {
                    echo $init*$initRandom;
                    echo "&lt;br&gt;";
                    $init++;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                <?php
                $init = 0;
                $initRandom = rand(1, 100);
                while ($init < 20) {
                    echo $init*$initRandom;
                    echo "<br>";
                    $init++;
                }
                ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
            <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
            Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
                <ul>
                    <li>multiplier la première variable avec la deuxième
                    </li>
                    <li>afficher le résultat</li>
                    <li>décrémenter la première variable</li>
                </ul>      
            </div>
            <div class="col-xl-6">
                <pre><code>
                $init = 100;
                $initRandom = rand(1, 100);
                while ($init > 10) {
                    echo $init*$initRandom;
                    echo "&lt;br&gt;";
                    $init--;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $init = 100;
                    $initRandom = rand(1, 100);
                    while ($init > 10) {
                        echo "Multiplication des 2 : ".$init*$initRandom;
                        echo "<br>";
                        $init--;
                    }
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
               Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :
               </p> 
               <ul>
                   <li>l'afficher</li>
                   <li>l'incrementer de la moitié de sa valeur</li>
               </ul>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $init = 1;
                while ($init < 10) {
                    echo $init."&lt;br&gt;";
                    $init += $init/2;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $init = 1;
                    while ($init < 10) {
                        echo $init."<br>";
                        $init += $init/2;
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>En allant de 1 à 15 avec un pas de 1, afficher le message <b>On y arrive presque</b>.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                for($i = 1;  $i  < 15; $i++){
                echo "&lt;b&gt; On y arrive presque&lt;/b&gt; &lt;br&gt;";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    for($i = 1;  $i  < 15; $i++){
                        echo "<b>On y arrive presque</b> <br>";
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>En allant de 20 à 0 avec un pas de 1, afficher le message <b>C'est presque bon</b>.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                for($i = 20; $i >= 0; $i--){
                    echo "&lt;b&gt;C'est presque bon&lt;/b&gt;&lt;br&gt;";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    for($i = 20; $i >= 0; $i--){
                        echo "<b>C'est presque bon</b><br>";
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 7</h2>
            </div>
            <div class="col-xl-4">
                <p>En allant de 1 à 100 avec un pas de 15, afficher le message <b>On tient le bon bout</b>.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                for($i = 1; $i <= 100; $i += 15){
                    echo "&lt;b&gt;On tient le bon bout&lt;/b&gt;&lt;br&gt;";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    for($i = 1; $i <= 100; $i += 15){
                        echo "<b>On tient le bon bout</b><br>";
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 8</h2>
            </div>
            <div class="col-xl-4">
                <p>En allant de 200 à 0 avec un pas de 12, afficher le message <b>Enfin !!!!</b>.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                for($i = 200; $i >= 0; $i -= 12){
                echo "&lt;b&gt;Enfin !!!!&lt;/b&gt;&lt;br&gt;";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    for($i = 200; $i >= 0; $i -= 12){
                        echo "<b>Enfin !!!!</b><br>";
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>