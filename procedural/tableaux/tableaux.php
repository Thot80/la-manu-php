<?php
$months = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");

$hautsDeFrance = [
    "02" => "Aisne",
    "59"=> "Nord",
    "80" => "Somme",
    "60" => "Oise",
    "62" => "Pas de Calais"
];
$hautsDeFrance["51"] = "Marne";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP - Les Tableaux</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Tableaux</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer un tableau <b>months</b> et l'initialiser avec les valeurs suivantes :</p>
                <ul>
                    <li>janvier</li>
                    <li>février</li>
                    <li>mars</li>
                    <li>avril</li>
                    <li>mai</li>
                    <li>juin</li>
                    <li>juillet</li>
                    <li>aout</li>
                    <li>septembre</li>
                    <li>octobre</li>
                    <li>novembre</li>
                    <li>décembre</li>
                </ul>
            </div>
            <div class="col-xl-6">
                <pre class="language-php"><code>
                $months = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre class="language-php"><code>var_dump($months);</code></pre>
                <p>
                <?= var_dump($months);?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    echo $months[2];
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code> echo $months[2];</code></pre>
                <p>
                    <?= $months[2];?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
            <p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.
            </p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    echo $months[5];
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>echo $months[5];</code></pre>
                <p>
                    <?=  $months[5];?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
               <p>
               Avec le tableau de l'exercice 1, modifier le mois de <b>aout</b> pour lui ajouter l'accent manquant.
               </p> 
            </div>
            <div class="col-xl-6">
                <pre><code>
                    $months[9] = "août";
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>echo $months[9] = "août";</code></pre>
                <p>
                   <?= $months[9] = "août";?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $hautsDeFrance = [
                    "02" => "Aisne",
                    "59"=> "Nord",
                    "80" => "Somme",
                    "60" => "Oise",
                    "62" => "Pas de Calais"
                ];
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>var_dump($hautsDeFrance);</code></pre>
                <p>
                    <?= var_dump($hautsDeFrance);?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
                </p>
            </div>
            <div class="col-xl-6">
                <pre class="language-php"><code>
                    $hautsDeFrance["59"];
                </code></pre>
            </div>
            <div class="col-xl-2">
            
            <pre><code>echo $hautsDeFrance["59"];</code></pre>
                <p>
                    <?= $hautsDeFrance["59"];?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 7</h2>
            </div>
            <div class="col-xl-4">
                <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
                </p>
            </div>
            <div class="col-xl-6">
                <pre class="language-php"><code>
                    $hautsDeFrance["51"] = "Marne";
                </code></pre>
            </div>
            <div class="col-xl-2">
            
            <pre><code>echo  $hautsDeFrance["51"];</code></pre>
                <p>
                    <?= $hautsDeFrance["51"];?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 8</h2>
            </div>
            <div class="col-xl-4">
                <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
                </p>
            </div>
            <div class="col-xl-6">
                <pre class="language-php"><code>
                    for ($i = 0; $i < count($months); $i++) {
                            echo "Mois n°".($i+1)." : ".$months[$i]."<br>";
                        }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    for ($i = 0; $i < count($months); $i++) {
                        echo "Mois n°".($i+1)." : ".$months[$i]."<br>";
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 9</h2>
            </div>
            <div class="col-xl-4">
                <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
                </p>
            </div>
            <div class="col-xl-6">
                <pre class="language-php"><code>
                    foreach ($hautsDeFrance as $key => $value) {
                            echo "Département ".$key." : ".$value."<br>";
                        }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    foreach ($hautsDeFrance as $key => $value) {
                        echo "Département ".$key." : ".$value."<br>";
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