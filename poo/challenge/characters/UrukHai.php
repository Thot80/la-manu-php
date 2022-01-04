<?php

class UrukHai extends Monster{

    function __construct()
    {
        parent::__construct('Huruk Haï', 'Ennemi puissant, l\'Uruk Haï est issu de la fusion de deux affreuses créatures', 1500, 2000, new Fleau(), new PikeArmor(), 0);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 20;
        return $this->rage;
    }

    /**
     * Uruk Hai rage attack overide normal one
     *
     * @param Character $ennemy
     * @param Game $game
     * @return string
     * @override
     */
    public function rageAttack(Character $ennemy): string
    {
        Game::$heroIsEntraved = true;
        return "Attaque spéciale ! " .$ennemy->getName(). ' ne peux plus attaquer pendant 2 tours !';
    }
}