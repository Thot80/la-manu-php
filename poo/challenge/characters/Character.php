<?php

abstract class Character {
    protected string $name;
    protected string $description;
    protected int $health;
    protected int $rage;
    protected Weapon $weapon;
    protected Armor $armor;

    


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of health
     */ 
    public function getHealth()
    {
        return $this->health;
    }


    /**
     * Get the value of rage
     */ 
    public function getRage()
    {
        return $this->rage;
    }

    /**
     * Set the value of rage
     *
     * @return  self
     */ 
    public function setRage($rage)
    {
        $this->rage = $rage;

        return $this;
    }

    /**
     * Get the value of weapon
     * @return Weapon
     */ 
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     * @return  self
     */ 
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get the value of armor
     */ 
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set the value of armor
     *
     * @return  self
     */ 
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }
    /**
     * Constructor
     *
     * @param string $name
     * @param string $description
     * @param integer $minHealth
     * @param integer $maxHealth
     * @param Weapon $weapon
     * @param Armor $armor
     */
    function __construct(string $name, string $description, int $minHealth, int $maxHealth, Weapon $weapon, Armor $armor)
    {
        $this->name = $name;
        $this->description = $description;
        $this->health = random_int($minHealth, $maxHealth);
        $this->rage = 0;
        $this->weapon = $weapon;
        $this->armor = $armor;
    }

    /**
     * Magic to String
     *
     * @return string
     */
    function __toString()
    {
        $txt = 'Classe : ' . $this->name . '<br>';
        $txt.= $this->description .'<br>';
        $txt .= 'Points de Vie : ' . $this->health . '<br>';
        $txt.= 'Rage : '.$this->rage.'<br>';
        $txt .= $this->armor . '<br>';
        $txt .= $this->weapon . '<br>';
        return $txt;
    }

    /**
     * Augmente la rage du personnage et renvoit la nouvelle valeure
     *
     * @return int
     */
    abstract function rageIsRaising():int;

    /**
     * Est Attaqué, renvoit une description des dégats subits
     *
     * @param integer $damage
     * @return string
     */
    function isAttacked(int $damage):string{
        $rage = $this->rageIsRaising();
        $txt = $this->name . ' est attaqué ! Sa rage est maintenant de '.$rage.'<br>';
        if ($this->armor === null){
            $this->health -= $damage;
            return $txt.$this->name . ' a subit '.$damage .' points de dégats <br>';
        }
        else{
            $armorAbsorbed = $this->armor->getAbsorbtion();
            if($armorAbsorbed > $damage){
                return $txt . $this->armor->getName() . ' a absorbé tous les dégats !<br>';
            }
            else{
                $damage =  $damage - $armorAbsorbed ;
                $this->health -= $damage;
                return  $txt.$this->name . ' a subit '.$damage .' points de dégats <br>'.$this->armor->getName() . ' a absorbé ' . $armorAbsorbed.  ' dégats !<br>';
            }
        }
    }

    abstract function rageAttack(Character $ennemy);

    function attack(Character $ennemy):string{

        $damage = $this->weapon->getDamage();
        if($this->rage < 100){
            $enemyRageText = $ennemy->isAttacked($damage);
            return $this->name . ' attaque avec une puissance de '.$damage .'<br>' . $enemyRageText;
        }
        else{  
            $txt = $this->rageAttack($ennemy);
            $this->rage = 0;
            return $txt;
        }
    }

    public function isDead():bool{
        if($this->health <= 0){
           
            echo $this->getName() . ' est mort ! La partie est finie...';
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Set the value of health
     *
     * @return  self
     */ 
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }
}