<?php

function converteString($valores) {     
    $str = implode(',', $valores);
    return $str = "[$str]";   
}

function saida($valores) {
    $saida = [];

    do {
        $key = array_search(1, $valores);
        if($key!==false){
            unset($valores[$key]);
        }

        array_push($saida, $key);
    } while($key == null);

    return $saida;
}

$array = [];

for($i=0; $i<20; $i++) {      
    array_push($array, rand(1, 10));
}

$result = array_count_values($array);


echo "Array sorteado " . converteString($array) . PHP_EOL;
echo "Números que não se repetem são " . converteString(saida($result));



