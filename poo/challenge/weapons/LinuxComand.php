<?php

class LinuxComand extends Weapon{
    function __construct(){
        parent::__construct('rm -rf *', 500, 800);
    }
}