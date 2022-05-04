<?php

function SeculoAno($ano) {
    $seculo = 1;    

    $seculo = round($ano / 100);
    $mod = $ano % 100;

    if($mod > 0)
        $seculo = $seculo + 1;

    return "Ano {$ano} - Século {$seculo}";
}

echo SeculoAno(10);