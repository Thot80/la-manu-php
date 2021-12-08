<?php

require('events.php');
$events = getEvents();
$currentId = count($events);

if(isset($_POST["event-title"], $_POST["event-day"], $_POST["event-month"], $_POST["event-year"], $_POST["event-note"]) &&
!empty($_POST["event-title"]) && !empty($_POST["event-day"]) && !empty($_POST["event-month"]) && !empty($_POST["event-year"]) && !empty($_POST["event-note"]) ){

    $currentId++;
    $data = [
        "event-id" => $currentId,
        "event-title" => $_POST["event-title"],
        "event-day" => $_POST["event-day"],
        "event-month" => $_POST["event-month"],
        "event-year" => $_POST["event-year"],
        "event-note" => $_POST["event-note"]
    ];
    createEvent($data);
    $event = getEvents();
}

if(isset($_POST["year"]) && !empty($_POST["year"]) && isset($_POST["month"]) && !empty($_POST["month"])){
    $month = $_POST["month"];
    $year = $_POST["year"];
    $stringDate = $year."-".$month."-01";
    $date = new DateTime($stringDate);
    $firstDayNumber = $date->format("N");
    $monthDayNumber = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $currentDate = new DateTime();
    $currentMonth = $currentDate->format("m");
    $currentYear = $currentDate->format("Y");
        $currentDay = $currentDate->format("d");
    if(($monthDayNumber >= 30 && $firstDayNumber == 7) || ($monthDayNumber > 30 && $firstDayNumber == 6)){
        $end = 7;
    }
    else {
        $end = 6;
    }
}
$k = $l = 1;
$weekly = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$monthly = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
?>
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
        <link rel="stylesheet" href="calendar.css">
    <title>PHP - Calendrier</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1>Calendrier</h1>
            </div>
        </div>
        <table class="table table-bordered border border-3">
            <thead>
                <tr>
                <?php
            foreach ($weekly as $value) {
            ?>
            <th scope="col border border-3"><?=$value;?></th>
            <?php
            }
            ?>
                </tr>
            </thead>
            <tbody>
            <?php
        for($i = 1; $i < $end; $i++){
        ?>
        <tr>
            <?php
            // $k est le compteur général
            for($j = 1; $j < 8; $j++){
                if($k >= $firstDayNumber && $k < ($monthDayNumber + $firstDayNumber)){
                    if($j%6 == 0 || $j%7 == 0){
            ?>
                     <td class="text-center table-active border border-3 text-danger fw-bold">
                    <p class="text-start"><?=$l++?></p>
                   </td>
                    <?php
                   }
                   else{
               ?>
            <td class="text-center table-active day-active border border-3">
                <!-- $l compte les jours du mois -->
                <p class="text-start"><?=$l++?></p>
                   </td>
            <?php
                }
               }else{
               ?>
            <td class="day border border-3">
               </td>
            <?php 
            }
            $k++;   
           }
           ?>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
        <div class="row mt-5">
            <div class="col-6 text-start"><h2>Choisir un mois</h2></div>
            <div class="col-6 text-start"><h2>Ajouter une note</h2></div>
        </div>
            <div class="row">
                <div class="col-6">
                    <form action="calendar.php" method="POST">
                        <div class="form-group">
                            <label for="year">Année</label>
                            <input type="text" class="form-control" id="year" name="year" value="<?= $year ?? 1970 ;?>">
                        </div>
                        <div class="form-group">
                            <label for="month">Mois</label>
                            <select class="form-control" id="month" name="month">
                                <?php
                            foreach ($monthly as $key => $value) {
                            ?>
                                <option value="<?= $key+1;?>"><?= $value;?></option>
                                <?php
                            }
                            ?>
                            </select>
                        </div>
                        <button type="submit mt-2" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="calendar.php" method="POST">
                    <div class="form-group">
                            <label for="event-title">Titre</label>
                            <input type="text" class="form-control" id="event-title" name="event-title">
                        </div>
                        <div class="form-group">
                            <label for="event-day">Jour</label>
                            <select class="form-control" id="event-day" name="event-day">
                                <?php
                            for($i = 1; $i <= $monthDayNumber; $i++) {
                            ?>
                                <option value="<?= $i;?>"><?= $i;?></option>
                                <?php
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="event-month">Mois</label>
                            <input type="text" class="form-control" id="event-month" name="event-month" readonly value="<?= $monthly[$month -1] ?? "Janvier";?>">
                        </div>
                        <div class="form-group">
                            <label for="event-year">Année</label>
                            <input type="text" class="form-control" id="event-year" name="event-year" readonly value="<?= $year ?? "1970" ;?>">
                        </div>
                        <div class="form-group">
                            <label for="event-note">Write your note here !</label>
                            <textarea class="form-control" id="event-note" rows="5" name="event-note"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Je lis depuis un JSON</h2>
                </div>

                <?php
                 foreach($events as $event){
                ?>
                <div class="col-12">
                    <h2><?= $event["event-title"];?></h2>
                </div>
                <div class="col-6">
                    <p><?= $event["event-day"];?>//<?= $event["event-month"];?>//<?= $event["event-year"];?></p>
                </div>
                <div class="col-6">
                    <p><?= $event["event-note"];?></p>
                </div>
                <?php
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