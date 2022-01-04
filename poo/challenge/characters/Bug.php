<?php

class Bug extends Monster{

    function __construct()
    {
        parent::__construct('Bug', 'Hantise de tous les Développeurs Web, le Bug ne recule devant rien pour éradiquer son adversaire', 1, 9999, new LinuxComand(), new SystemErrorArmor(), 300);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 5;
        return $this->rage;
    }
    public function rageAttack(Character $enemy): string
    {
        exit("Le Bug est trop fort ! C'est tout cassé...");
    }
}