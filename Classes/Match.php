<?php
namespace Classes;


class Match 
{
    
    private $playerList;
    
    public function __construct( Array $players)
    {
       $this->playerList = $players;
    }

    public function start()
    {
        foreach($this->playerList as $player){
            echo $player->play() . '\n';
        }
    }
  
}