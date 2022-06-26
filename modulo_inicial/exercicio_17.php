<?php
    /*

    17) Faça um programa que lê 4 valores X, A, B e C onde X é um número inteiro e
    positivo e A, B,e C são quaisquer valores reais. O programa deve escrever os
    valores lidos e:
    • se X = 1, escrever os três valores A, B e C em ordem crescente;
    • se X = 2, escrever os três valores A, B e C em ordem decrescente;
    • se X = 3, escrever os três valores A, B, e C de forma que o maior
    valor fique entre os outros dois;
    • se X não for um dos três valores acima, dar uma mensagem indicando
    isso.

    */

    function crescente($a, $b, $c){

        $ordem = array($a,$b,$c);

        sort($ordem);

        foreach($ordem as $valor){
            echo $valor." ";
        }
    }

    function decrescente($a, $b, $c){

        $ordem = array($a,$b,$c);

        rsort($ordem);

        foreach($ordem as $valor){
            echo $valor." ";
        }
    }

    function centro($a, $b, $c){
        $maior;
        if($a > $b && $a > $c){
            $maior = $a;
            echo $b." ".$a." ".$c;
        }elseif($b > $c){
            $maior = $b;
            echo $a." ".$b." ".$c;
        }else{
            $maior = $c;
            echo $a." ".$c." ".$b;
        }
    }

    $a = readline("Insira o valor de a: ");
    $b = readline("Insira o valor de b: ");
    $c = readline("Insira o valor de c: ");

    echo "\n";

    echo "Como gostaria de ordernar?\n\n";
    echo "1 - Crescente\n";
    echo "2 - Decrescente\n";
    echo "3 - Maior valor no centro\n\n";

    switch($x = readline("Selecione uma opção: ")){
        case 1:
            crescente($a,$b,$c);
            break;
        case 2:
            decrescente($a,$b,$c);
            break;
        case 3:
            centro($a,$b,$c);
            break;
        default:
            echo "Opção inválida";
    }
?>