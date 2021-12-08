<?php

$tableOfContent;

$tableOfContent["variables"] = [1,2,3,4,5];
$tableOfContent["conditions"]= [1,2,3,4,5,6,7,8];
?>
<?php
include("table-of-content.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>La Manu-PHP</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>PHP Procédural</h1>
        </div>
    </div>
    <?php
    foreach($tableOfContent as $exoName => $exoNumber){
        ?>
        <div class="row">
            <div class="col-12">
            <h2 text-center><a href="<?=$exoName;?>.php"><?=$exoName;?></a></h2>  
            </div>
            <?php
            for($i = 0; $i < count($exoNumber)-1; $i++){
            ?>
            <div class="col-12">
                <h3><?="Exercice n°".($i+1);?></h3>
            </div>
            <div class="col-12">
                <?php
                $imagePath = "procedural/assets/img/".$exoName."/ennonce".($i+1).".PNG";
                ?>
                <img src="<?=$imagePath;?>" alt="Image of the question" class="img-fluid">
            </div>
            <div class="col-12">
            <?php
                $imagePath = "procedural/assets/img/".$exoName."/".$exoName.($i+1).".PNG";
                ?>
                <img src="<?=$imagePath;?>" alt="Code snippet of exercice" class="img-fluid">
            </div>
            <?php
            }
            ?>  
        </div>
    <?php    
    }
    ?>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


