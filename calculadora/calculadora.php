<?php
    $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
    $operacao = isset($_GET["oper"]) ? $_GET["oper"] : 1;

    switch($operacao){
        case 1:
            $resultado = $numero * 2;
            break;
        case 2:
            $resultado = $numero ** 3;
            break;
        case 3:
            $resultado = sqrt($numero);
            break;
    }
    echo "A resposta é: $resultado";
?>
<br/>
<a href="index.html">Voltar</a>