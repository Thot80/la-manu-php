<?php
abstract class Armor{

    protected string $name;
    protected array $absorbtion;

    

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
     * Random armor absorbtion factor
     *
     * @return int
     */
    public function getAbsorbtion()
    {
        return random_int($this->absorbtion['min'], $this->absorbtion['max']);
    }

    function __construct(string $name, int $minAbsorbtion, int $maxAbsorbtion){
        $this->name = $name;
        $this->absorbtion = [
            'min' => $minAbsorbtion,
            'max' => $maxAbsorbtion
        ];
    }

    function __toString()
    {
        $text = 'Armure : ' . $this->name . '<br> Nieau d\'absorbtion : ' . $this->absorbtion['min'] . ' - ' . $this->absorbtion['max'];
        return $text;
    }
}