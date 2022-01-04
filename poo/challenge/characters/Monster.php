<?php

abstract class Monster extends Character{
    protected int $rageDamageAdder;

    function __construct(string $name, string $description, int $minHealth, int $maxHealth, Weapon $weapon, Armor $armor, int $rageDamageAdder)
    {
        parent::__construct($name, $description, $minHealth, $maxHealth, $weapon, $armor);
        $this->rageDamageAdder = $rageDamageAdder;
    }

    public function rageAttack(Character $ennemy):string
    {
        $damage = $this->getWeapon()->getDamage;
        $damage += $this->rageDamageAdder;
        $ennemy->isAttacked($damage);
        return $this->name . ' porte une attaque enragée ! Puissance de l\'attaque : '.$damage .'<br>';
    }
}