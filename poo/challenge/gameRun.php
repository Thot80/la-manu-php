<?php
spl_autoload_register(function ($class){

    $sources = array("$class.php","armors/$class.php", "characters/$class.php",  "weapons/$class.php" );
    
        foreach ($sources as $source) {
            if (file_exists($source)) {
                require_once $source;
            } 
        } 
    });
if (isset($_POST['hero']) && isset($_POST['gender']) && !empty($_POST['hero']) && !empty($_POST['gender'])){

    $gender = $_POST['gender'];
    $hero = $_POST['hero'];
    switch ($hero){
        case 'mage':
            $game = new Game(new Mage());
            $heroImg = 'img/'.$gender.'-mage.png';
        break;
        case 'murderer':
            $game = new Game(new Murderer());
            $heroImg = 'img/'.$gender.'-murderer.png';
        break;
        case 'paladin':
            $game = new Game(new Paladin());
            $heroImg = 'img/'.$gender.'-paladin.png';
        break;
        case 'webdev':
            $game = new Game(new WebDev());
            $heroImg = 'img/'.$gender.'-webdev.png';
        break;
    }
    $monsterName = strtolower($game->getMonster()->getName());
    $monsterName = str_replace(' ', '', $monsterName);
    $monsterName = str_replace('ï','i',$monsterName);
    $monsterImg = "img/". $monsterName.'.png';
}
else{
    header(('Location: index.php'));
}

include_once 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
        <div class="card hero-card mt-5">
            <img src="<?=$heroImg?>" class="card-img-top" alt="Image de <?=$game->getHero()->getName()?>">
            <div class="card-body">
                <h5 class="card-title"><?= $game->getHero()->getName() ?></h5>
                <p class="card-text"><?= $game->getHero()->getDescription() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">💗<span class="mx-2"><?=$game->getHero()->getHealth() ?></span></li>
                <li class="list-group-item">⚔ <span class="mx-2"><?= $game->getHero()->getArmor()->getName()?> : <?= $game->getHero()->getArmor()->getAbsorbtion()?></span></li>
                <li class="list-group-item">🗡<span class="mx-2"><?= $game->getHero()->getWeapon()->getName()?> : <?= $game->getHero()->getWeapon()->getDamage()?></span></li>
                <li class="list-group-item">🔥 <span class="mx-2"><?= $game->getHero()->getRage() ?></span></li>
            </ul>
        </div>
        </div>
        <div class="col-4 btn-container">
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-round btn-danger" data-bs-toggle="modal" data-bs-target="#battleModal">
            </button> -->
            <?php
            while($game->getHero()->getHealth() > 0 && $game->getMonster()->getHealth() > 0){
                $game->playRound();
            }
            ?>
        </div>
        <div class="col-4">
            <div class="card monster-card mt-5">
                <img src="<?= $monsterImg ?>" class="card-img-top" alt="Image de <?=$game->getMonster()->getName()?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $game->getMonster()->getName() ?></h5>
                    <p class="card-text"><?= $game->getMonster()->getDescription() ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">💗<span class="mx-2"><?= $game->getMonster()->getHealth() ?></span></li>
                    <li class="list-group-item">⚔ <span class="mx-2"><?= $game->getMonster()->getArmor()->getName() ?> : <?= $game->getMonster()->getArmor()->getAbsorbtion() ?></span></li>
                    <li class="list-group-item">🗡<span class="mx-2"><?= $game->getMonster()->getWeapon()->getName() ?> : <?= $game->getMonster()->getWeapon()->getDamage() ?></span></li>
                    <li class="list-group-item">🔥 <span class="mx-2"><?= $game->getMonster()->getRage() ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
    <div class="modal fade" id="battleModal" tabindex="-1" aria-labelledby="battleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="battleModalLabel">Round <?=$game->getCount()+1?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $game->playRound() ?>
                </div>
                <div class="modal-footer">
                </div>
                </div>
            </div>
            </div>
<?php
require 'footer.php';
?>