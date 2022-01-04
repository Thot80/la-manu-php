<?php

class Paladin extends Hero{
    function __construct(){

        parent::__construct('Paladin', 'Héros des premières lignes, son rôle est de protéger ses alliés en encaissant le plus de dégâts possibles', 2000, 3000, new Espadon(), new PlateArmor(), 3);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 30;
        return $this->rage;
    }
}