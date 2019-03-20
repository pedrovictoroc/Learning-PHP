<?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : 'Nao informado' ;
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : 'Nao informado';
    $idade = date("Y") - $ano;

    echo "$nome tem $idade anos e é do sexo $sexo!";
?>
<br/>
<a href="index.html">Voltar</a>