<?php

    $qtd = readline("Quantos valores deseja inserir para calcular a média? ");
    $media;

    for($i = 0; $i < $qtd; $i++){
        $num[$i] = readline("Insira o valor desejado ");
        if($i === 0){
            $maior = $num[$i];
        }elseif($maior < $num[$i]){
            $maior = $num[$i];
        }
    }
    echo "Dos ".$qtd." números digitados, o maior é ".$maior;
?>