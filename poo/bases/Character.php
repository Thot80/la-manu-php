<?php

class Character{
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

    public function attacked(Character $character){
        if($this instanceof Hero && $character instanceof Orc){
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
        else if ($this instanceof Orc && $character instanceof Hero){
            $this->health -= $character->getWeaponDamage();
        }
    }

    public function attack(Character $character){
        
        if($this instanceof Orc){
            $character->attacked($this);
        }
        else if($this instanceof Hero) {
            $character->attacked($this);
        }
    }
}