<?php

function leapYear() {
    for($num=4; $num <= 2024; $num++){
        if ($num % 4 == 0 && $num % 100 != 0|| $num % 400 == 0) {
            echo $num . " \n";
        }
             
    }
}

echo leapYear();

?>
