<?php
$x = random_int(-999999, 999999);
if($x%2===0){
    $texto="par";
}
else{
    $texto="impar";
};
print($x." es un número ".$texto.".")
?>
