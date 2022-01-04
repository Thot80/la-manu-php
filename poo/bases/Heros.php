<?php
class Heros extends Characters{
    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    public function setWeapon(string $weapon):void{
        $this->weapon = $weapon;
    }
    public function setWeaponDamage(int $weaponDamage):void{
        $this->weaponDamage = $weaponDamage;
    }
    public function setShield(string $shield):void{
        $this->shield = $shield;
    }
    public function setShieldValue(int $shieldValue):void{
        $this->shieldValue = $shieldValue;
    }

    public function getWeapon():string{
        return $this->weapon;
    }
    
    public function getWeaponDamage():int{
        return $this->weaponDamage;
    }
    
    public function getShield():string{
        return $this->shield;
    }
    
    public function getShieldValue():int{
        return $this->shieldValue;
    }

    function __construct(int $health, int $rage, string $weapon, int $weaponDamage, string $shield, int $shieldValue){

        parent::__construct($health, $rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
        echo "Pour Kel Talas ! <br> Health : $this->health <br> Rage : $this->rage <br> Weapon Name : $this->weapon <br> Weapon Damage : $this->weaponDamage <br> Shield Name : $this->shield <br> Shield Protection : $this->shieldValue <br>";
    }

    protected function raiseRage():void{
        $this->rage += 30;
    }
}