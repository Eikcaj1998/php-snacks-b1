<?php
$numbers = [];


while(count($numbers) < 15){
    $randomNumber = rand(1,100);
    if(!in_array($randomNumber, $numbers)){
        $numbers[] = $randomNumber;
    }
}
var_dump($numbers);
