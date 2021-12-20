<?php
require "Character.php";
require "Hero.php";
require "Orc.php";

$hero = new Hero(2000, 0, "épée", 250, "armure lourde", 600);
$orc = new Orc(500, 0, 0);

while($hero->getHealth() > 0 && $orc->getHealth() > 0){
    
    $orc->attack($hero);
    echo "L'orc porte une attaque à ".$orc->getDamage()." points de dégats <br>";
    echo ($orc->getDamage() < $hero->getShieldValue()) ? "L'armure absorbe tous les dégats ! <br>" : "L'armure absorbe ".$hero->getShieldValue(). "Points de dégats <br>";
    echo "La rage du héro augmente de 30 ! <br> ";
    echo ($hero->getRage() > 100) ? "Le héros déclenche une attaque est inflige <br>".$hero->getWeaponDamage(). " points de dégats à l'orc ! <br>" : "<br>";
    echo "La rage du héro vaut maintanant : ".$hero->getRage(). "<br>";
    echo "Il reste ".$hero->getHealth(). " points de vie au héro <br>";
    echo "Il reste ".$orc->getHealth(). " points de vie à l'orc <br>";

}