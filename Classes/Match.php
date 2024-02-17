<?php
namespace Classes;
use Classes\Attack;
use Classes\Defence;
use Classes\Keeper;

class Match 
{
    private $attack;
    private $defence;
    private $keeper;
    
    public function __construct()
    {
        $this->attack = new Attack();
        $this->defence = new Defence;
        $this->keeper = new Keeper;

    }
  
}