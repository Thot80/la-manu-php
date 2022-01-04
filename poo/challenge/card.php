<?php
require 'header.php';
$imgPath = "img/female-paladin.png";
$altDescription = "Un paladin";
$characterName = "Paladin";
$characterDescription = "lorem ipsum sin amet dolor consubiliabus jodorowski bla bla bla etc et ctera caeterae novae stella cervesa opus incertum magna du magma ";
$characterHealth = 1500;
$characterShield = "700";
$characterDamage = "700";
$characterRage = "700";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
        <div class="card">
            <img src="<?= $imgPath ?>" class="card-img-top" alt="<?=$altDescription?>">
            <div class="card-body">
                <h5 class="card-title"><?= $characterName ?></h5>
                <p class="card-text"><?= $characterDescription ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">💗<span class="mx-2"><?= $characterHealth ?></span></li>
                <li class="list-group-item">⚔ <span class="mx-2"><?= $characterShield ?></span></li>
                <li class="list-group-item">🗡<span class="mx-2"><?= $characterDamage ?></span></li>
                <li class="list-group-item">🔥 <span class="mx-2"><?= $characterRage ?></span></li>
            </ul>
        </div>
        </div>
        <div class="col-4">

        </div>
        <div class="col-4">
            <div class="card">
                <img src="<?= $imgPath ?>" class="card-img-top" alt="<?=$altDescription?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $characterName ?></h5>
                    <p class="card-text"><?= $characterDescription ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">💗<span class="mx-2"><?= $characterHealth ?></span></li>
                    <li class="list-group-item">⚔ <span class="mx-2"><?= $characterShield ?></span></li>
                    <li class="list-group-item">🗡<span class="mx-2"><?= $characterDamage ?></span></li>
                    <li class="list-group-item">🔥 <span class="mx-2"><?= $characterRage ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>