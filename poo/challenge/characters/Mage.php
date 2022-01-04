<?php

class Mage extends Hero{
    function __construct(){

        parent::__construct('Mage', 'Héros de l\'arrière-ligne, son rôle est de causer le plus de dégâts possibles en invoquant de puissants sorts', 1000, 1500, new MagicStick(), new MagicRobe(), 4);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 20;
        return $this->rage;
    }
}