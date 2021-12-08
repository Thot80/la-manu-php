<?php
$domaine = $_SERVER['HTTP_HOST'];
$current_page = $_SERVER['PHP_SELF'];



// /********************************** IS SET ******************** */
// //PHP 5
// if(isset($_GET["startDate"])){
//     echo $_GET["startDate"];
// }
// else{
//     echo "No Start Date";
// }


// // PHP 7.4
// echo "<br>";
// echo $_GET["startDate"] ?? "No Start Date";

// PHP 5


// /********************** IS SET + IS EMPTY **********************************/

// PHP5

// if(isset($_GET["startDate"]) && empty($_GET["startDate"])){
//         echo $_GET["startDate"];
//     }
//     else{
//         echo "No Start Date";
//     }

// // PHP 7.4
// echo  $_GET["endDate"] ??= "No End Date";

// echo $_GET["endDate"] ??= "<span class=\"false\"> Paramètre manquant <span>"

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <title>PHP - Les URLs</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les URLs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
                <p><a href="?lastname=Nemare&firstname=Jean">URL de Test</a></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                echo "Last Name : " .$_GET["lastname"]."&ltbr&gt";
                   
                   echo "First Name : ". $_GET["firstname"];
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    echo "Last Name : " .$_GET["lastname"]."<br>";
                   
                    echo "First Name : ". $_GET["firstname"];
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean </p>
                <p><a href="?lastname=Nemare&firstname=Jean&age">URL de Test</a></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                if (isset($_GET["age"])){
                    echo $_GET["age"];
                }
                else{
                    echo "Paramètre inconnu";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    if (isset($_GET["age"])){
                        echo $_GET["age"];
                    }
                    else{
                        echo "Paramètre inconnu";
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
                <p>
                Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
                <p><a href="?startDate=2/05/2016&endDate=27/11/2016">URL de Test</a></p>       
            </div>
            <div class="col-xl-6">
                <pre><code>
                echo $testStartDate = $_GET["startDate"] ??= "No Start Date";
                echo "&ltbr&gt"
                $testEndDate = $_GET["endDate"] ??= "No End Date";
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p><?= $testStartDate = $_GET["startDate"] ??= "No Start Date"; ?></p>
                <p><?= $testEndDate = $_GET["endDate"] ??= "No End Date"; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
               <p>
               Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP
               </p> 
               <p><a href="?language=PHP&server=LAMP">URL de Test</a></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                 echo $testLanguage = $_GET["language"] ??= "No Language";
                 echo "&ltbr&gt";
                 echo $testServer =  $_GET["server"] ??= "No Server";   
                </code></pre>
            </div>
            <div class="col-xl-2">
            <p><?= $testLanguage = $_GET["language"] ??= "No Language"; ?></p>
                <p><?= $testServer = $_GET["server"] ??= "No Server"; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12</p>
                <p><a href="?week=12">URL de Test</a></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                echo $testWeek = $_GET["week"] ??= "No week";
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p><?= $testWeek = $_GET["week"] ??= "No week";?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101</p>
                <a href="?building=12&room=101">URL de Test</a>
            </div>
            <div class="col-xl-6">
                <pre><code>
                <pre><code>
                 echo $testBuilding = $_GET["building"] ??= "No Building";
                 echo "&ltbr&gt";
                 echo $testRoom =  $_GET["room"] ??= "No Room";   
                </code></pre>
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p><?= $testBuilding = $_GET["building"] ??= "No Building";?>
            </p>
            <p><?= $testRoom =  $_GET["room"] ??= "No Room";?></p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>