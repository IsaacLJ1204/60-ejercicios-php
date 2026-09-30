<?php
function factorizar($n) {
    $divisores = [];
    $dividendo = $n;
    
    for ($i = 2; $i * $i <= $dividendo; $i++) {
        while ($dividendo % $i == 0) {
            $divisores[] = $i;
            $dividendo = $dividendo / $i;
        }
    }
    
    if ($dividendo > 1) {
        $divisores[] = $dividendo;
    }
    
    return $divisores;
}
function sumaDivisoresPropios($n) {
    if ($n <= 1) return 0;
    $factoresPrimos = factorizar($n); 
    $conteoPrimos = array_count_values($factoresPrimos);
    
    $sumaTotal = 1;
    foreach ($conteoPrimos as $primo => $exponente) {
        $sumaPotencias = 0;
        for ($i = 0; $i <= $exponente; $i++) {
            $sumaPotencias += pow($primo, $i);
        }
        $sumaTotal *= $sumaPotencias;
    }
    return $sumaTotal - $n;
}
function amigos($n1, $n2) {
    if ($n1 == $n2) return "FALSE";
    
    if (sumaDivisoresPropios($n1) == $n2 && sumaDivisoresPropios($n2) == $n1) {
        return "TRUE";
    }
    
    return "FALSE";
}
print_r(factorizar(27)); 
print(amigos(1204, 1004));
print(amigos(220, 284))
?>
