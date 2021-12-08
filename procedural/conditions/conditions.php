<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP - Les conditions</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Conditions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Créer une variable <b>age</b> et l'initialiser avec une valeur.</p>
                <p>Si l'âge est supérieur ou égale à 18, afficher <b>Vous êtes majeur</b>. Dans le cas contraire afficher <b>Vous êtes mineur</b>.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $age = 33;

                if ($age >= 18) {
                    echo "Vous êtes majeur";
                }
                else {
                    echo "Vous êtes mineur";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $age = 33;

                    if ($age >= 18) {
                        echo "Vous êtes majeur";
                    }
                    else {
                        echo "Vous êtes mineur";
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
                <p>Créer une variable <b>isEasy</b>  de type booléan et l'initialiser avec une valeur.  
                Afficher <b>C'est facile!!</b>  si c'est vrai. Dans le cas contraire afficher <b>C'est difficile !!!</b>.  
                <p><b>Bonus :</b> L'écrire de deux manières différentes.</p> </p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $isEasy = true;

                if ($isEasy == true) {
                    echo "C'est facile !! \n";
                }
                else {
                    echo "C'est difficile !!\n";
                }

                if($isEasy){
                    echo "C'est facile !! \n";
                }
                {
                    echo "C'est facile !! \n";
                }

                echo ($isEasy == true) ? "C'est facile !!\n" : "C'est difficile !!\n";
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                     $isEasy = true;

                     if ($isEasy == true) {
                         echo "C'est facile !! \n";
                     }
                     else {
                         echo "C'est difficile !!\n";
                     }
     
                     if($isEasy){
                         echo "C'est facile !! \n";
                     }
                     {
                         echo "C'est facile !! \n";
                     }
     
                     echo ($isEasy == true) ? "C'est facile !!\n" : "C'est difficile !!\n";
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
                Créer deux variables <b>age</b>  et <b>gender</b> . La variable <b>gender</b>  peut prendre comme valeur :</p>
                <ul>
                    <li>Homme</li>
                    <li>Femme</li>
                </ul>
                <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
                <ul>
                    <li><b>Vous êtes un homme et vous êtes majeur</b></li>
                    <li><b>Vous êtes un homme et vous êtes mineur</b></li>
                    <li><b>Vous êtes une femme et vous êtes majeur</b></li>
                    <li><b>Vous êtes une femme et vous êtes mineur</b></li>
                </ul>
                <p>Gérer tous les cas.</p>        
            </div>
            <div class="col-xl-6">
                <pre><code>
                            $age = 50;
                            $gender = "homme";
                            $message = "";
                            if ($gender == "homme") {
                                $message .= "Vous êtes un homme";
                            }
                            else {
                                $message .= "Vous êtes une femme";
                            }
                            if ($age >= 18) {
                                $message .= " et vous êtes majeur";
                            }
                            else{
                                $message .= " et vous êtes mineur";
                            }
                            echo $message;
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $age = 50;
                    $gender = "homme";
                    $message = "";
                    if ($gender == "homme") {
                        $message .= "Vous êtes un homme";
                    }
                    else {
                        $message .= "Vous êtes une femme";
                    }
                    if ($age >= 18) {
                        $message .= " et vous êtes majeur";
                    }
                    else{
                        $message .= " et vous êtes mineur";
                    }
                    echo $message;
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
               L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
               </p> 
               <p> Créer une variable <b>magnitude</b> ****. Selon la valeur de <b>magnitude</b> ****, afficher la phrase correspondante.</p>
               <table>
                    <thead>
                        <tr>
                            <th>Magnitude</th>
                            <th>Phrase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Micro-séisme impossible à ressentir.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction  de la distance.</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Séisme capable de tout détruire sur une très vaste zone</td>
                        </tr>
                    </tbody>
                </table>
                <p>Gérer tous les cas.</p>
                <p> <b>Utilser autre chose que des if else</b></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    $magnitude = 5;

                    switch ($magnitude) {
                        case 1:
                            echo "Micro-séisme impossible à ressentir.";
                            break;
                        case 2:
                            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                            break;
                        case 3:
                            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                            break;
                        case 4:
                            echo "Séïsme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                            break;
                        case 5:
                            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
                            break;
                        case 6:
                            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180km) autour de l'épicentre.";
                            break;
                        case 7:
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance";
                            break;
                        case 8:
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone de plusieurs centaines de kilomètres.";
                            break;
                        case 9:
                            echo "Séisme capable de tout détruire sur une très vaste zone.";
                            break;
                        default:
                            echo "Magnitude inconue";
                            break;
                    }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $magnitude = 5;

                    switch ($magnitude) {
                        case 1:
                            echo "Micro-séisme impossible à ressentir.";
                            break;
                        case 2:
                            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                            break;
                        case 3:
                            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                            break;
                        case 4:
                            echo "Séïsme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                            break;
                        case 5:
                            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
                            break;
                        case 6:
                            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180km) autour de l'épicentre.";
                            break;
                        case 7:
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance";
                            break;
                        case 8:
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone de plusieurs centaines de kilomètres.";
                            break;
                        case 9:
                            echo "Séisme capable de tout détruire sur une très vaste zone.";
                            break;
                        default:
                            echo "Magnitude inconue";
                            break;
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
                <p>VOIR POUR CREER DES TERNAIRE PLUTÔT QUE L’INVERSE ?</p>
                <p>Traduire ce code avec des if et des else :</p>
                <pre><code>echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
                </code></pre>
            </div>
            <div class="col-xl-6">
                <pre><code>
                if ($gender !== 'Homme'){
                    echo "C'est une développeuse !!!";
                }
                else{
                    echo "C'est un développeur !!!";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <?php
                if ($gender !== 'Homme'){
                    echo "C'est une développeuse !!!";
                }
                else{
                    echo "C'est un développeur !!!";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>Traduire ce code avec des if et des else :</p>
                <pre><code>echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
                </code></pre>
            </div>
            <div class="col-xl-6">
                <pre><code>
                if($age >= 18){
                    echo "Tu es majeur";
                }
                else{
                    echo "Tu n'es pas majeur";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    if($age >= 18){
                        echo "Tu es majeur";
                    }
                    else{
                        echo "Tu n'es pas majeur";
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
                <p>Traduire ce code avec des if et des else :</p>
                <pre><code>echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
                </code></pre>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $isOk = false;
                    if (!$isOk) {
                        echo "c'est pas bon !!!";
                    }
                    else {
                        echo "C'est ok !!";
                    }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                     $isOk = false;
                     if (!$isOk) {
                         echo "c'est pas bon !!!";
                     }
                     else {
                         echo "C'est ok !!";
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
                <p>Traduire ce code avec des if et des else :</p>
                <pre><code>echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
                </code></pre>
            </div>
            <div class="col-xl-6">
                <pre><code>
                if ($isOk) {
                    echo "c'est ok !!";
                }
                else {
                    echo "c'est pas bon";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                   if ($isOk) {
                    echo "c'est ok !!";
                }
                else {
                    echo "c'est pas bon";
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