<?php

function aNotacionCientifica($numero, $precision) {
    $exponente = 0;
    while ($numero >= 10) {
        $numero = $numero / 10;
        $exponente++;
    }
    while ($numero < 1) {
        $numero = $numero * 10;
        $exponente--;
    }
    $numeroRedondeado = round($numero, $precision);
    $signo = ($exponente >= 0) ? "+" : "";
    return $numeroRedondeado . "e" . $signo . $exponente;
}
print("Bits de una memoria RAM de 16GB (precision de 5 decimales): ".aNotacionCientifica(16*8589934592, 5)."<br>");
print("Población de la tierra (4 decimales): ". aNotacionCientifica(8318204263, 4)."<br>");
print("Tamaño de un virus (3 decimales): "). aNotacionCientifica(0.00000002, 3)
?>
