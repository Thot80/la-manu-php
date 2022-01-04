<?php

class WebDev extends Hero{
    function __construct(){

        parent::__construct('Développeur Web', 'Héros de support, le Développeur Web a pour but de réparer les soi-disant bugs qui ont causé la chute de son Paladin protecteur', 1500, 1800, new OldComputer(), new WireArmor(), 1);
    }

    public function rageIsRaising(): int
    {
        $this->rage += 40;
        return $this->rage;
    }
    public function rageAttack(Character $ennemy): string
    {
        if($this->health < $ennemy->getHealth()){ 
            do{
                $userInput = readline('Vous êtes en mauvaise passe ! Utiliser le pouvoir du Développeur Web ? [Y/N]');
                if($userInput === 'Y'){
                    exit('Pouvoir de Dèv, on quitte le navire !');
                }
                else if ($userInput === 'N'){
                    break;
                }
                else {
                    continue;
                }
            }
            while($userInput !== 'Y' || $userInput !== 'N');
            return 'Vous n\'avez pas voulu utiliser votre pouvoir !';   
        }
        else{
            return 'Malgrés votre rage, vous ne pouvez pas encore utiliser votre pouvoir';
        }
    }
}