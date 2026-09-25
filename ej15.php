<?php
function calcular_imc ($kg, $m){
    return $kg/($m**2);   
};
print("Tu índice de masa corporal es ".calcular_imc(71, 1.71));
?>
