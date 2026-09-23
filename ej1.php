<?php
$distancia_sol_tierra = 149597870;
$distancia_pluton_sol = 59064000000;
$diametro_sol= 1392000;
function notacion_cientifica($num, $precision){
    $cadena=strval($num);
    return $cadena[0].".".substr($cadena, 1, $precision)."e".strlen($cadena)-1;
}
echo "Distancia del sol a la Tierra con 7 decimales de precision: ".notacion_cientifica($distancia_sol_tierra, 7)."<br>";
echo "Distancia de Plutón al Sol con 2 decimales: ".notacion_cientifica($distancia_sol_tierra, 2)."<br>";
echo "Diámetro del sol con 4 decimales: ".notacion_cientifica($distancia_sol_tierra, 4);
?>
