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
    <title>PHP - Les Dates</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Les Dates</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-4">
                <p>Afficher la date courante en respectant la forme <b>jj/mm/aaaa</b></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    echo date('d/m/Y');
                </code></pre>
            </div>
            <div class="col-xl-2">
               <p>Date : <?= date('d/m/Y');  ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Afficher la date courante au format <b>jj/mm/aa</b></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                echo date('d-m-y');
                </code></pre>
            </div>
            <div class="col-xl-2">
            <p>Date : <?= date('d-m-y');  ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-4">
            <p>Afficher la date courante avec le jour de la semaine et le mois en toute lettres, le faire en français.</p> 
            </div>
            <div class="col-xl-6">
               <pre><code>
                 // Anglais
                 echo date('l j F Y');
                 
                 // Français

                 setlocale (LC_TIME, 'fr_FR.utf8','fra');
                 echo utf8_encode(strftime('%A %d %B %Y'));
               </code></pre>
            </div>
            <div class="col-xl-2">
               <p>En Anglais : <?= date('l j F Y');?></p>
            <?php
            setlocale (LC_TIME, 'fr_FR.utf8','fra');
            ?>
            <p>En Français : <?= utf8_encode(strftime('%A %d %B %Y'));?></p>
            </div>    
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-4">
               <p>
               Afficher le timestamp du jour et celui du <b>mardi 2 août 2016 à 15h</b>
               </p> 
            </div>
            <div class="col-xl-6">
                <pre><code>
                // Timestamp actuel
                echo time();

                // Timestamp 2-08-2016-15h
                mktime(15, 0, 0, 8, 2, 2016);
                </code></pre>
            </div>
            <div class="col-xl-2">
               <p>Timestamp Actuel <?= time(); ?></p>
               <p>Timestamp du 02 Août 2016 à 15h <?= mktime(15, 0, 0, 8, 2, 2016); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-4">
                <p>Afficher le nombre de jour qui nous sépare du <b>16 mai 2016</b></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                $date = "2016-05-16";
                $now = new DateTime();
                $then = $dateTime = new DateTime($date);
                $interval = $now->diff($then);
                echo $interval->days;
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $date = "2016-05-16";
                    $now = new DateTime();
                    $then = $dateTime = new DateTime($date);
                    $interval = $now->diff($then);
                    echo $interval->days;
                    ?>
                     jours nous séparent du 16 mai 2016.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-4">
                <p>Afficher le nombre de jour dans le <b>mois de février de l'année 2016</b></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    $numberDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                    echo $numberDays; 
                </code></pre>
            </div>
            <div class="col-xl-2">
            <?php
                $numberDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
            ?>
                <p>
                    Il y a eu <?= $numberDays; ?> jours en février 2016.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 7</h2>
            </div>
            <div class="col-xl-4">
                <p>Afficher la date du jour +20 jours</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    
                    $newDay = new DateTime();
                    $newDay->add(new DateInterval('P20D'));
                    echo $newDay->format('d/m/Y');
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $newDay = new DateTime();
                    $newDay->add(new DateInterval('P20D'));
                    ?>
                   Dans 20 jours nous serons le : <?= $newDay->format('d/m/Y');?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 8</h2>
            </div>
            <div class="col-xl-4">
                <p>Afficher la date du jour -20 jours</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                    
                    $newDay = new DateTime();
                    $newDay->sub(new DateInterval('P20D'));
                    echo $newDay->format('d/m/Y');
                </code></pre>
            </div>
            <div class="col-xl-2">
                <p>
                    <?php
                    $newDay = new DateTime();
                    $newDay->sub(new DateInterval('P20D'));
                    ?>
                   Il y a 20 jours nous étions le : <?= $newDay->format('d/m/Y');?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>TP Calendrier</h2>
            </div>
            <div class="col-xl-4">
                <p>Réaliser un calendrier</p>
            </div>
            <div class="col-xl-4">
                <form action="calendar.php" method="POST">
                    <div class="form-group">
                        <label for="year">Année</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="1970">
                    </div>
                    <div class="form-group">
                        <label for="month">Mois</label>
                        <select  class="form-control" id="month" name="month">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-xl-4">
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>