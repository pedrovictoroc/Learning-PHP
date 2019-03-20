<?php
    $ano_atual =  $_GET["p"];//pegar variavel na URL

    echo "Ano atual: $ano_atual <br/>";
    $ano_anterior = --$ano_atual;

    echo "Ano anterior: $ano_anterior <br/>";
    ++$ano_atual;
    
    $ano_posterior = ++$ano_atual;
    echo "Ano posterior: $ano_posterior";

?>