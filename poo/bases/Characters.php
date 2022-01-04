<?php

class Characters{
    protected int $health;
    protected int $rage;

    public function setHealth(int $health):void {
        $this->health = $health;
    }

    public function setRage(int $rage):void {
        $this->rage = $rage;
    }
    
    public function getRage():int{
        return $this->rage;
    }
    
    public function getHealth():int{
        return $this->health;
    }

    function __construct(int $health, int $rage){
        $this->setRage($rage);
        $this->setHealth($health);
    }

    public function attacked(Characters $character){
        if($this instanceof Heros && $character instanceof Orc){
            $damage = random_int(600, 800);
            $character->setDamage($damage);
            if($damage < $this->getShieldValue()){
                $this->raiseRage();
            }
            else{
                $damage -= $this->getShieldValue();
                $this->health -= $damage;
                $this->raiseRage();
            }
            
            if($this->getRage() > 100){
                $this->attack($character);
                $this->setRage(0);
            }
        }
        else if ($this instanceof Orc && $character instanceof Heros){
            $this->health -= $character->getWeaponDamage();
        }
    }

    public function attack(Characters $character){
        
        if($this instanceof Orc){
            $character->attacked($this);
        }
        else if($this instanceof Heros) {
            $character->attacked($this);
        }
    }
}