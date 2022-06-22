<?php

    $sexo = strtolower(readline("Qual o seu sexo? M ou F "));
    $altura = readline("Qual sua altura (exemplo 1.80) ");
    $resultado;

    if($sexo == "m"){
        $resultado = ((72.7 * $altura) - 58);
        echo "Seu peso ideal é ".$resultado;
    }elseif($sexo == "f"){
        $resultado = ((62.1 * $altura) - 58);
        echo "Seu peso ideal é ".$resultado;
    }else{
        echo "Opção inválida";
    }

    
?>