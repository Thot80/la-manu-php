<?php

class Orc extends Characters{
    private int $damage = 0;

    public function setDamage(int $damage):void{
        $this->damage = $damage;
    }
    public function getDamage():int{
        return $this->damage;
    }

    function __construct(int $health, int $rage, int $damage){
        parent::__construct($health, $rage);
        $this->setDamage($damage);
        echo "Pour Nerzul !! <br> Health : $this->health <br> Rage : $this->rage <br> Damage : $this->damage <br>";
    }

}