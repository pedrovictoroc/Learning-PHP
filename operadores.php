<?php
    /* 
        SINTAXE OPERADOR TERNARIO

        EXPRESSAO ? VERDADEIRO : FALSO
    */

/*
        TESTE
    $a = $_GET["p"];//passando como entrada um inteiro
    $b = 3;
    echo $a == $b ? "rs <br/>" : "sr <br/>"; // retornará rs, pois "3" é igual a 3

    echo $a === $b ? "rs <br/>" : "sr <br/>"; // retornará sr, pois "3" não é de mesmo tipo que 3
*/

/*
        ATRIBUIÇÃO COM UNARIO

    $a = $_GET["p"];
    $resposta = $a >= 10 ? "Maior ou igual a 10" : "Menor que 10";
    echo $resposta;
*/

/*
        CALCULO DE APROVAÇÃO OU REPROVAÇÃO
    //para passar p e a segue o modelo: http://localhost/LearnPHP/operadores.php?p=50&a=30
    $nota1 = $_GET["p"];
    $nota2 = $_GET["a"];
    
    $resposta = ($nota1+$nota2)/2 >= 7 ? "Aprovado" : "reprovado";
    echo $resposta;
*/

?>
