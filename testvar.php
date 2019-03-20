<?php
    //As variaveis são compativeis, porem não exigem declaração de tipo, portanto, usaremos Type casting
    $nome = (string)"Pedro";
    $idade = (int)18;
    
    //metodo 1
    echo $nome . " tem " . $idade . " anos <br/>";
    
    //metodo 2
    echo "$nome tem $idade anos";
?>