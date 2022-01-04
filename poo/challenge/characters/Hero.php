<?php

abstract class Hero extends Character{

    protected int $rageDamageMultiplier;

    function __construct(string $name, string $description, int $minHealth, int $maxHealth, Weapon $weapon, Armor $armor, int $rageDamageMultiplier)
    {
        parent::__construct($name, $description, $minHealth, $maxHealth, $weapon, $armor);
        $this->rageDamageMultiplier = $rageDamageMultiplier;
    }

    public function rageAttack(Character $ennemy):string
    {
        $damage = $this->getWeapon()->getDamage();
        $damage *= $this->rageDamageMultiplier;
        $ennemy->isAttacked($damage);
        return $this->name . ' porte une attaque enragée ! Puissance de l\'attaque : '.$damage .'<br>';
    }
}