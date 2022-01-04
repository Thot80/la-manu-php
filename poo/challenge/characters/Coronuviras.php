<?php

class Coronuviras extends Monster{

    function __construct()
    {
        parent::__construct('Coronuviras', 'Ennemi dévastateur, le Coronuviras ne porte aucune attaque inutile', 2000, 3000, new Masse(), new BatArmor(), 0);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 20;
        return $this->rage;
    }
    public function rageAttack(Character $ennemy): string
    {
        Game::$heroIsInfected = true;
        return $this->getName()." porte un coup critique !" . $ennemy->getName() . " est infécté par le virus, plus que 5 tours pour triompher !";
    }
}