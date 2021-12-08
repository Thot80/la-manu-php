<?php
/**
 * Funtion always return true
 *
 * @return boolean
 */
function returnTrue() : bool{
      return true;
}

/**
 * Concatenation of a string with an intege
 *
 * @param string $string
 * @param integer $integer
 * @return string
 */
function concatStrInt(string $string, int $integer):string{
    return $string.$integer;
}

/**
 * Compare first and second param
 *
 * @param integer $a
 * @param integer $b
 * @return string
 */
function compare2Integers(int $a, int $b) : string{
    if ($a > $b) {
        return "Le premier nombre est plus grand";
    }
    elseif ($a < $b){
        return "Le premier nombre est plus petit";
    }
    else{
        return "Les deux nombres sont identiques";
    }
}

/**
 * Say hello and present persone
 *
 * @param string $lastName
 * @param string $firstName
 * @param integer $age
 * @return string
 */
function sayHello(string $lastName, string $firstName,int $age) : string {
    return "Bonjour ".$lastName." ".$firstName.", tu as ".$age." ans";
}

/**
 * Categorize gender and age category
 *
 * @param integer $age
 * @param string $gender
 * @return string
 */
function genderAge(int $age, string $gender):string{
    $message = "";
    if ($gender == "homme"){
        $message .= "Vous êtes un homme";
    }
    else{
        $message .= "Vous êtes une femme";
    }
    if ($age >= 18) {
        $message .= " et vous êtes majeur";
    }
    else{
        $message .= " et vous êtes mineur";
    }
    return $message;
}

/**
 * Sum of 3 params with default values
 *
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer
 */
function makeSum(int $a = 1, $b = 2, $c = 3):int{
    return $a + $b + $c;
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
    <title>PHP - Les fonctions</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Fonctions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une fonction qui retourne <b>true</b>.Afficher le résultat fonction</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                /**
                * Funtion always return true
                *
                * @return boolean
                */
                function returnTrue() : bool{
                    return true;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>returnTrue();</code></pre>
                <p>
                <?= returnTrue();?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une fonction qui prend en paramètre une chaine de caractères et un nombre et qui revoit la concaténation de ces deux paramètres</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                /**
                * Concatenation of a string with an intege
                *
                * @param string $string
                * @param integer $integer
                * @return string
                */
                function concatStrInt(string $string, int $integer):string{
                    return $string.$integer;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>concatStrInt("Machaine",4);</code></pre>
                <p>
                    <?= concatStrInt("Ma chaine ", 4);?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
            <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
            </p>
                <ul>
                    <li><b>Le premier nombre est plus grand</b> si le premier nombre est plus grand que le deuxième
                    </li>
                    <li><b>Le premier nombre est plus petit</b> si le premier nombre est plus petit que le deuxième</li>
                    <li><b>Les deux nombres sont identiques</b> si les deux nombres sont égaux</li>
                </ul>      
            </div>
            <div class="col-xl-6">
                <pre><code>
                /**
                * Compare first and second param
                *
                * @param integer $a
                * @param integer $b
                * @return string
                */
                function compare2Integers(int $a, int $b) : string{
                    if ($a > $b) {
                        return "Le premier nombre est plus grand";
                    }
                    elseif ($a < $b){
                        return "Le premier nombre est plus petit";
                    }
                    else{
                        return "Les deux nombres sont identiques";
                    }
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>compare2Integer(7,18);</code></pre>
                <p>
                    <?= compare2Integers(7,18);?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
               <p>
                Faire une fonction qui prend trois paramètres : <b>le nom, le prénom et l'âge</b> d'une personne**. Elle doit renvoyer une chaine de la forme :  
                "Bonjour" + <b>le nom</b> + <b>le    prénom</b> + ",tu as" + <b>âge</b> + "ans".
               </p> 
            </div>
            <div class="col-xl-6">
                <pre><code>
                /**
                * Say hello and present persone
                *
                * @param string $lastName
                * @param string $firstName
                * @param integer $age
                * @return string
                */
                function sayHello(string $lastName, string $firstName,int $age) : string {
                    return "Bonjour ".$lastName." ".$firstName.", tu as ".$age." ans";
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>sayHello("Doe", "John",33);</code></pre>
                <p>
                   <?= sayHello("Doe", "John",33);?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une fonction qui prend deux paramètres : <b>l'âge et le genre</b> d'une personne**. Le genre peut être :
                <ul>
                    <li>Homme</li>
                    <li>Femme</li>
                </ul>
                La fonction doit renvoyer en fonction des paramètres :

                <ul>
                    <li>Vous êtes un homme et vous êtes majeur</li>
                    <li>Vous êtes un homme et vous êtes mineur</li>
                    <li>Vous êtes une femme et vous êtes majeur</li>
                    <li>Vous êtes une femme et vous êtes mineur</li>
                </ul>
            </p>
            <p>Gérer tous les cas.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                /**
                * Categorize gender and age category
                *
                * @param integer $age
                * @param string $gender
                * @return string
                */
                function genderAge(int $age, string $gender):string{
                    $message = "";
                    if ($gender == "homme"){
                        $message .= "Vous êtes un homme";
                    }
                    else{
                        $message .= "Vous êtes une femme";
                    }
                    if ($age >= 18) {
                        $message .= " et vous êtes majeur";
                    }
                    else{
                        $message .= " et vous êtes mineur";
                    }
                    return $message;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
                <pre><code>genderAge(33, "femme");</code></pre>
                <p>
                    <?= genderAge(33,"femme");?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
                Tous les paramètres doivent avoir une valeur par défaut.
                </p>
            </div>
            <div class="col-xl-6">
                <pre class="language-php"><code>
                /**
                * Sum of 3 params with default values
                *
                * @param integer $a
                * @param integer $b
                * @param integer $c
                * @return integer
                */
                function makeSum(int $a = 1, $b = 2, $c = 3):int{
                    return $a + $b + $c;
                }
                </code></pre>
            </div>
            <div class="col-xl-2">
            
            <pre><code>makeSum();</code></pre>
                <p>
                    <?= makeSum();?>
                </p>
                <pre><code>makeSum(7,8,9);</code></pre>
                <p>
                    <?= makeSum(7,8,9);?>
                </p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>