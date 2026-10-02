<?php
    function generarCadenaAleatoria(){
        $chars = '';   
        $frase="";
        for ($i = 32; $i <= 126; $i++) {
            $chars .= chr($i);
        };
        for ($i = 0; $i<random_int(1, 500); $i++){
            $frase.=$chars[random_int(0, strlen($chars))-1];
        };
        return $frase;
    };
    function mostrarAlReves($cadena){
        $rev_char="";
        for ($i=strlen($cadena); $i>=0; $i--){
            $rev_char.=$cadena[$i];
        };
        return $rev_char;
    };
    $frasenormal=generarCadenaAleatoria();
    $frasealreves=mostrarAlReves($frasenormal);
    print("Frase: ". $frasenormal);
    print("<br>");
    print("Frase al revés: ".$frasealreves)
?>
