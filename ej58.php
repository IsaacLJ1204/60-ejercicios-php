<?php
function contar_palabras_aleatorias($frase){
    $letra_aleatoria="abcdefghijklmnñopqrstuvwxyz"[random_int(0, 26)];
    $contador=0;
    for($indice=0; $indice<(strlen($frase)-1); $indice++){
        if (($letra_aleatoria===strtolower($frase[$indice]))){
            ++$contador;
        };
    };
    return [$letra_aleatoria, $contador];
};
$resultado=contar_palabras_aleatorias("Alguien dijo alguna vez por la boca pide el pez");
print("La letra ".$resultado[0]. " ha salido un total de ".$resultado[1]." veces");
?> 
