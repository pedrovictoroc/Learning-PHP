<?php
    $site = "cursoEmVideo";
    $$site = "cursoDePhp";//cria uma variavel com o nome do conteudo de $site
    $$$site = "loucura do krl";// INFELIZMENTE CRIA UMA VARIAVEL COM O NOME DO CONTEUDO DE $$SITE
    echo $site . "<br/>";
    echo $cursoEmVideo . "<br/>"; //mostra o mesmo conteudo da proxima linha
    echo $$site . "<br/>";
    echo $$$site; //MEU DEUS ISSO NÃO DEVIA EXISTIR
?>