<?php

class Game{
    private Hero $hero;
    private Monster $monster;
    private int $count;
    public static bool $heroIsEntraved;
    public static bool $heroIsInfected;
    private int $entravedCount;
    private int $infectedCount; 

    function __construct(Hero $hero){

        $this->hero = $hero;
        $monsters = [new Bug(), new Ghost(), new UrukHai(), new Coronuviras()];
        $random = random_int(0, 3);
        $this->monster = $monsters[$random];
        $this->count = 0;
        $this->entravedCount = 0;
        $this->infectedCount = 5;
        $this::$heroIsEntraved = false;
        $this::$heroIsInfected = false;
    }

    public function regularTurn(){
        $this->count++;
        if( !$this->monster->isDead()){
            echo $this->monster->attack($this->hero);
            echo $this->hero->isDead() ? $this->hero->getName()." est mort !" : "";
        }
        if(!$this->hero->isDead()){
            echo $this->hero->attack($this->monster);
            echo $this->monster->isDead() ? $this->monster->getName()." est mort !" : "";

        }
    }

    public function entravedTurn(){
        $this->entravedCount++;
        if($this->entravedCount === 3){
            $this->entravedCount = 0;
            Game::$heroIsEntraved = false;
            $this->regularTurn();
        }
        else{
            $this->count++;
            echo $this->hero->getName().' est entravé ! Il ne peut pas attaqué ce tour';
            echo $this->monster->attack($this->hero);
        }
    }

    public function infectedTurn(){
        $this->count++;
        $this->infectedCount--;
        echo $this->hero->getName()." est infecté par le virus ! Plus que " .$this->infectedCount. "  tours pour triompher <br>";
        if($this->infectedCount === 0){
            $this->hero->setHealth(0);
            $this->regularTurn();
        }
        else{
            $this->regularTurn();
        }
    }

    public function playRound(){
        if(Game::$heroIsEntraved){
            $this->entravedTurn();
        }
        else if (Game::$heroIsInfected){
            $this->infectedTurn();
        }
        else {
            $this->regularTurn();
        }
    }
    /**
     * Get the value of hero
     */ 
    public function getHero()
    {
        return $this->hero;
    }

    /**
     * Set the value of hero
     *
     * @return  self
     */ 
    public function setHero($hero)
    {
        $this->hero = $hero;

        return $this;
    }

    /**
     * Get the value of monster
     */ 
    public function getMonster()
    {
        return $this->monster;
    }

    /**
     * Set the value of monster
     *
     * @return  self
     */ 
    public function setMonster($monster)
    {
        $this->monster = $monster;

        return $this;
    }

    /**
     * Get the value of count
     */ 
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set the value of count
     *
     * @return  self
     */ 
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get the value of heroIsEntraved
     */ 
    public function getHeroIsEntraved()
    {
        return $this->heroIsEntraved;
    }

    /**
     * Set the value of heroIsEntraved
     *
     * @return  self
     */ 
    public function setHeroIsEntraved($heroIsEntraved)
    {
        $this->heroIsEntraved = $heroIsEntraved;

        return $this;
    }

    /**
     * Get the value of heroIsInfected
     */ 
    public function getHeroIsInfected()
    {
        return $this->heroIsInfected;
    }

    /**
     * Set the value of heroIsInfected
     *
     * @return  self
     */ 
    public function setHeroIsInfected($heroIsInfected)
    {
        $this->heroIsInfected = $heroIsInfected;

        return $this;
    }

    /**
     * Get the value of entravedCount
     */ 
    public function getEntravedCount()
    {
        return $this->entravedCount;
    }

    /**
     * Set the value of entravedCount
     *
     * @return  self
     */ 
    public function setEntravedCount($entravedCount)
    {
        $this->entravedCount = $entravedCount;

        return $this;
    }

    /**
     * Get the value of infectedCount
     */ 
    public function getInfectedCount()
    {
        return $this->infectedCount;
    }

    /**
     * Set the value of infectedCount
     *
     * @return  self
     */ 
    public function setInfectedCount($infectedCount)
    {
        $this->infectedCount = $infectedCount;

        return $this;
    }
}