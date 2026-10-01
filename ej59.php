<?php
function obtenerDivisores(int $numero): array {
    $divisores = [];
    $numeroAbs = abs($numero);
    if ($numeroAbs === 0) {
        return [];
    }
    $limite = sqrt($numeroAbs);
    for ($i = 1; $i <= $limite; $i++) {
        if ($numeroAbs % $i === 0) {
            $divisores[] = $i;
            if ($i !== $numeroAbs / $i) {
                $divisores[] = $numeroAbs / $i;
            }
        }
    }
    sort($divisores);
    return $divisores;
}
function perfecto(int $numero): bool{
    $divisores=obtenerDivisores($numero);
    if((array_sum($divisores)-$numero)===$numero){
        return True;
    };
    return False;
};
$n1=12;
$n2=28;
print("Es ".$n1." perfecto?: ".boolval(perfecto($n1)));
print("<br>");
print("Es ".$n2." perfecto?: ".boolval(perfecto($n2)));
?> 
