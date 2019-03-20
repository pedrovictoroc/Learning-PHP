<?php
    function teste_valor($x){
        $x += 2;
        echo "O valor de X é: $x <br/>";
    }

    function teste_referencia(&$z){
        $z += 3;
        echo "O valor de z é: $z <br/>";
    }


    $a = 3;
    teste_valor($a);
    echo "O valor de A é: $a <br/>";
    teste_referencia($a);
    echo "O valor de A agora é: $a <br/>";
?>