<?php

$name = $argv[1];
$year = $argv[2];

function age($y) {
    $cYear = date("Y");
    if($y > $cYear){
        $age = abs($cYear - $y - 5);
        return $age;
    }
    if($cYear > $y){
        $age = $cYear - $y;
        return $age;
    }  
}

$age = age($year);

echo "Your name is " .$name . ", and your age is " . $age . " years old\n";

if ($age >= 18 && $age < 60) {
    echo "You are a voter";
}

if ($age >= 60) {
    echo "You are a senior citizen";
}

?>