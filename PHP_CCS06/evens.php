<?php

function even() {
    for($num=100; $num > 1; $num--){
        if($num%2 == 0){
            echo $num . " \n";
        }
        
    }
}

echo even();

?>
