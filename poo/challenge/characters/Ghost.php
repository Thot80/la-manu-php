<?php

class Ghost extends Monster{

    function __construct()
    {
        parent::__construct('Revenant', 'Ennemi commun, le Revenant est un amas de chair et d\'os qui tient debout grâce au pouvoir des nécromanciens', 1000, 1300, new GhostNail(), new SkinArmor(), 300);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 20;
        return $this->rage;
    }
}