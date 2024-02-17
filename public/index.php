<?php
use Classes\AttackPlayer;
use Classes\DefencePlayer;
use Classes\KeepingPlayer;
use Classes\Match;

$players = [];

for($i = 0; $i<5; $i++){
    array_push($players, new DefencePlayer);
}

for($i = 0; $i<5; $i++){
    array_push($players, new AttackPlayer);
}

array_push($players,new KeepingPlayer);

$match = new Match;
$match->start();
