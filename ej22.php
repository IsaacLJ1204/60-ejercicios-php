<?php
$a=5;
$n=3;
function calc_subir($n_adultos, $n_ninyos){
    if ((($n_adultos*75+$n_ninyos*20)*2.20462)>1000){
        return false;
    }
    else{
        return true;
    };
}
if (calc_subir($a, $n)){
    print("Se pueden subir");
}
else{
    print("No pueden subir");
}

?>
