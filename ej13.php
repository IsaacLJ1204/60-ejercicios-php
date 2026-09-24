<?php
$tabla_nif = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", 
              "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", 
              "C", "K", "E"];

function calcular_letra_dni($numeros_dni) {
    global $tabla_nif;
    $numero = (int)$numeros_dni;
    $indice = $numero % 23;
    $letra = $tabla_nif[$indice];
    return $numero . $letra;
};
echo calcular_letra_dni(12042763)
?>
