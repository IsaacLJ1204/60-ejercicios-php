<?php
function dividir($n1, $n2){
    if ($n2==0){
        $lista=["Infinito", 0];
    }
    else{
        $lista=[intdiv($n1, $n2), $n1 % $n2];
    };
    print($n1." dividido por ".$n2." dé como resultado un cociente de ".$lista[0]." y el resto es ".$lista[1]);
};
dividir(25, 3)
?>
