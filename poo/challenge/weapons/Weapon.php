<?php

abstract class Weapon {

    protected string $name;
    protected array $damage;

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
     * getDamage
     *
     * @return integer
     */
    public function getDamage():int{
        return random_int($this->damage['min'], $this->damage['max']);
    }

    /**
     * constructor
     *
     * @param [type] $name
     * @param [type] $minDamage
     * @param [type] $maxDamage
     */
    function __construct(string $name, int $minDamage, int $maxDamage)
    {
        $this->name = $name;
        $this->damage = [
            'min' => $minDamage,
            'max' => $maxDamage
        ];
    }

    /**
     * Magic to strin for echoing object
     *
     * @return string
     */
    function __toString()
    {
        $txt = 'Arme : ' . $this->name . ' <br> Dégats : ' . $this->damage['min'] .' - ' .$this->damage['max'] . '<br>';
        return $txt;
    }
}