<?php
    function soma(){
        $vetor = func_get_args();
        $num_var = func_num_args();
        echo "total de variaveis: $num_var <br/>";

        $soma = 0;
        for($cont=0; $cont<$num_var;$cont++){
            echo "index[$cont] = $vetor[$cont] <br/>";
            $soma += $vetor[$cont];
        }
        return $soma;
    };
    
    $res = soma(3,4,5,6,7,8);
    echo "A resposta é: $res";
?>