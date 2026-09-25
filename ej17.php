<?php
$x=20;
$y=41;
function centigrados_a_kelvin($gradosC){
    return $gradosC+273.15;
};
function centigrados_a_farenheit($gradosC){
    return ($gradosC*9/5)+32;
}
print($x." grados centígrados son ".centigrados_a_kelvin($x)." grados Kelvin<br>");
print($x." grados centígrados son ".centigrados_a_farenheit($x)." grados Farenheit<br>");
print($y." grados centígrados son ".centigrados_a_kelvin($y)." grados Kelvin<br>");
print($y." grados centígrados son ".centigrados_a_farenheit($y)." grados Farenheit<br>");
?>
