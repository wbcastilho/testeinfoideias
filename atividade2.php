<?php

function Primos($inicial, $final) {
    $array = [];

    foreach (range($inicial, $final) as $numero) {
        if(($numero != $inicial) && ($numero != $final)) {            
            if(($numero % 2 != 0) && ($numero % 3 != 0) && ($numero % 5 != 0) && ($numero % 7 != 0))       
                array_push($array, $numero); 
        }          
    }

    return $array;
}

print_r(Primos(10, 29));