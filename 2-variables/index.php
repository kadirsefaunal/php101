<?php

$status = true;
echo $status;
echo gettype($status);

$age = 25;
echo "\n " . gettype($age);
var_dump($age);

$currency = 2.4;
var_dump($currency);

$team = 'compass';
var_dump($team);

$arr = array(1, 5, 7);
var_dump($arr);

$arr = array('team' => $team, 'projectType' => 'inventory');
var_dump($arr);

echo $arr['team'];
echo $arr['members'];

$arr['members'] = ['Burak', 'Sezgi', 'Emre', 'Sefa', 'Alperen', 'Tuğba'];
var_dump($arr['members']);

var_dump($GLOBALS);