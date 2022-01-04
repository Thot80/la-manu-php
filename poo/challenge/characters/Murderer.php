<?php

class Murderer extends Hero{
    function __construct(){

        parent::__construct('Assassin', 'Héros de l\'ombre, l\'Assassin se faufile dans les rangs ennemis afin d\'en finir le plus rapidement possible', 800, 1300, new Dager(), new ThiefCap(), 2);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 20;
        return $this->rage;
    }
}