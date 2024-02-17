<?php 
namespace Classes;

use Interfaces\PlayerInterface;
class KeepingPlayer implements PlayerInterface{

    public function play(){
        echo 'keeping';
    }

}