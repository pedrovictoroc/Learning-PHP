<?php
    //para receber o valor, adicionar ?p=VALOR na URL
    // ex: http://localhost/LearnPHP/desconto.php?p=5
    $preco = $_GET["p"];
    $preco = ($preco * 0.9);
    echo "O preço do produto é: $preco <br/>";

    echo "O preço do produto é: " . number_format($preco, 2);
?>