<?php

    function financiamento ($salario, $valorEmprestimo){
        $resultado = $salario / $valorEmprestimo;
        return $resultado;
    }

    if(financiamento($salario = readline("Qual o seu salário? "), $valorEmprestimo = readline("Qual o valor do empréstimo? ")) >=5){
        echo "Financiamento concedido\n";
    }
    else{
        echo "Financiamento negado\n";
    }

    echo "Obrigado por nos consultar";

?>